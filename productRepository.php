<?php
    include_once 'databaseConnection.php';
  
    class ProductRepository{
        private $connection;

        function __construct(){
            $conn =  new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }
        function insertProduct($product){
            $conn = $this->connection;
    
            $name = $product->getName();
            $source = $product->getSource();
            $price = $product->getPrice();
            $category = $product->getCategory();
            $section = $product->getSection();
            $quantity = $product->getQuantity();
            $cartId = $product->getCartId();
            $new = $product->getNew();
          
            
            $sql = "INSERT INTO product(name,source,price,category,section,quantity,cartId,new) VALUES (?,?,?,?,?,?,?,?,?)";
        
            $statement = $conn->prepare($sql);
    
            $statement->execute([$name,$source,$price, $category, $section, $quantity, $cartId,$new]);
    
            echo "<script> alert('Product has been inserted successfuly!); </script>";
    
        }
        function getAllProducts(){
            $conn = $this->connection;
    
            $sql = "SELECT * FROM product";
    
            $statement = $conn->query($sql);
            $products = $statement->fetch_all(MYSQLI_ASSOC);
    
            return $products;
        }
        function getProductById($id){
            $conn = $this->connection;
    
            $sql ="SELECT * FROM product WHERE id='$id'";
            $statement = $conn->query($sql);
            $product = $statement->fetch_object();
    
            return $product;
        }
        function updateProduct($id,$name,$source,$price,$category,$section,$quantity,$cartId,$new,$editedByP){
            $conn = $this->connection;
    
            $sql = "UPDATE product SET name=?, source=?, price=?, category=?, section=?, quantity=?, cartId=?, new=?, editedByP=? WHERE id=?";
            $statement = $conn->prepare($sql);
            
            $statement->execute([$name, $source, $price, $category, $section, $quantity, $cartId, $new, $editedByP, $id]);
    
            echo "<script> alert('Update was successful'); </script>";
        }

        function deleteProduct($id){
            $conn = $this->connection;

            $sql = "DELETE FROM product WHERE id=?";

            $statement = $conn->prepare($sql);

            $statement->execute([$id]);

            echo "<script>alert('Delete was successful');</script>";
    }
}
?>
<?php

namespace App\Models;

use App\Helpers\Debug;
use App\Helpers\FileSaver;
use App\Helpers\Mailer;
use PDO;
use PDOException;

class Model
{
  protected $Pdo;
  protected $Debug;
  protected $Mailer;
  protected $FileSaver;


  public function __construct()
  {
    $this->Pdo = DATABASE_PERM === 1 ? getConnect() : '';
    $this->Debug = new Debug();
    $this->Mailer = new Mailer();
    $this->FileSaver = new FileSaver();
  }


  public function show($table, $id)
  {
    try {
      $stmt = $this->Pdo->prepare("SELECT * FROM `$table` WHERE id = :id");
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {

      echo "An error occurred during the database operation:: " . $e->getMessage();
      return false;
    }
  }


  public function all($table)
  {
    try {
      $stmt = $this->Pdo->prepare("SELECT * FROM `$table`");
      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $results;
    } catch (PDOException  $e) {

      echo "An error occurred during the database operation:" . $e->getMessage();
      return false;
    }
  }

  public function selectByRecord($table, $entity, $value, $param)
  {
    $stmt = $this->Pdo->prepare("SELECT * FROM `$table` WHERE $entity = :entity");
    $stmt->bindParam(':entity', $value, $param);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
  }

  public function insert()
  {
  }

  public function join()
  {
  }



  public function registration($body)
  {
    $participation = $this->sanitizeInteger($body['participation']);
    $first_name = $this->sanitize($body['first_name']);
    $last_name = $this->sanitize($body['last_name']);
    $phone = $this->sanitize($body['phone']);
    $email = $this->sanitizeEmail($body['email']);
    $num_of_guests = $this->sanitizeInteger($body['num_of_guests']);
    $age_of_children = $this->sanitize($body['age_of_children']);
    $name_of_guests = $this->sanitize($body['name_of_guests']);
    $spec_requests = $this->sanitize($body['spec_requests']);

    $stmt = $this->Pdo->prepare("INSERT INTO 
      `registrations` 
      VALUES
       (NULL,:participation, :first_name, :last_name, :phone, :email, :num_of_guests, :age_of_children, :name_of_guests, :spec_requests, current_timestamp())");

    $stmt->bindParam(':participation', $participation, PDO::PARAM_INT);
    $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':num_of_guests', $num_of_guests, PDO::PARAM_INT);
    $stmt->bindParam(':age_of_children', $age_of_children, PDO::PARAM_STR);
    $stmt->bindParam(':name_of_guests', $name_of_guests, PDO::PARAM_INT);
    $stmt->bindParam(':spec_requests', $spec_requests, PDO::PARAM_STR);

    $stmt->execute();

    return true;
  }


  private function sanitize($value)
  {
    return htmlspecialchars($value, FILTER_SANITIZE_SPECIAL_CHARS);
  }

  private function sanitizeEmail($email)
  {
    return filter_var($this->sanitize($email), FILTER_SANITIZE_EMAIL);
  }

  private function sanitizeInteger($value)
  {
    return filter_var($value, FILTER_SANITIZE_NUMBER_INT);
  }
}

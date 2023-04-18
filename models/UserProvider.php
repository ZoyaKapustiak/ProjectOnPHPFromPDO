<?php
class UserProvider {
  private PDO $pdo;

  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  public function setUser(User $user): void 
  {
    $statement = $this->pdo->prepare(
      'INSERT INTO users (email, phone) VALUES (:email, :phone)'
  );
  $statement->execute([
      'email' => $user->getEmail(),
      'phone' => $user->getPhone(),
  ]);
  }
}
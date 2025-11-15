<?php

require_once '../databases/koneksi.php';

function login($data)
{
  global $conn;

  $username = strtolower($data['username']);
  $password = $data['password'];

  // Ambil user berdasarkan username saja
  $query = $conn->prepare("SELECT * FROM user WHERE username = ?");
  $query->bind_param("s", $username);
  $query->execute();

  $result = $query->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Cek password dengan password_verify
    if (password_verify($password, $user['password'])) {
      session_start();
      $_SESSION['is-user'] = true;
      $_SESSION['id'] = $user['id'];
      $_SESSION['password'] = $user['password'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['nama'] = $user['nama'];
      $_SESSION['no_telp'] = $user['no_telp'];

      header("Location: ../admin/index.php");
      exit;
    }
  }

  // Kalau gagal
  header("Location: login.php?login=gagal");
  exit;
}



function register($data)
{
  global $conn;

  $username = strtolower($data['username']);
  $nama = $conn->real_escape_string($data['nama']);
  $email = $conn->real_escape_string($data['email']);
  $notelp = $conn->real_escape_string($data['notelp']);
  $passwd = password_hash($data['password'], PASSWORD_DEFAULT);

  // Cek username atau email sudah ada
  $cek = $conn->query("SELECT id FROM user WHERE username = '$username' OR email = '$email'");

  if ($cek->num_rows > 0) {
    header("Location: registrasi.php?pesan=warning");
    exit;
  }

  // Insert data
  $query = "INSERT INTO user (username, nama, email, no_telp, password) VALUES ('$username', '$nama', '$email', '$notelp', '$passwd')";

  $result = $conn->query($query);

  if ($result) {
    header("Location: login.php?pesan=sukses");
    exit;
  }

  return $conn->affected_rows;
}

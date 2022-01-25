<?php
    $template = "depan";
    $judul    = "Login";
    $konten   = "
    <div class='container'>
        <div class='row'>
            <div class='col-lg-6'>
                <div class='mt-5'>
                    <img src='./assets/img/pasundan.png' class='logo'>
                        <h1>Selamat Datang</h1>
                        <p class='descripsi'>Di Web Pembayaran SPP SMK Pasundan Subang</p>
                    <img src='./assets/img/logo.png' class='logo-1'>
                </div>
            </div>

            <div class='col-lg-6 mt-5'>
                <div class='card'>
                    <div class='card-body'>
                      <h5 class='card-title'>Login</h5>
                      <form>
                        <div class='form-group'>
                          <label for='exampleInputEmail1'>Username</label>
                          <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'>
                        </div>
                        <div class='form-group'>
                          <label for='exampleInputPassword1'>Password</label>
                          <input type='password' class='form-control' id='exampleInputPassword1'>
                        </div>
                        <div class='form-group mt-4'>
                            <select class='form-control text-center' id='exampleFormControlSelect1'>
                              <option>- - Masuk Sebagai - -</option>
                              <option>Administrator</option>
                              <option>Petugas</option>
                              <option>Siswa</option>
                            </select>
                          </div>
						  <button type='submit' class='btn btn-primary'>Masuk</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
?>
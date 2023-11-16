<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>

    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label
                            for="tab-1" class="tab">Login</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                            class="tab">Sign Up</label>
                        <div class="login-space">
                            <!-- Form Login -->
                            <div class="login">
                                <form action="{{ url('login') }}" method="post">
                                    @csrf
                                    <br><br>
                                    <div class="group">
                                        <label for="mail_mhs" class="label">Username</label>
                                        <input id="mail_mhs" name="mail_mhs" type="text" class="input"
                                            placeholder="Enter your Username" required>
                                    </div>
                                    <div class="group">
                                        <label for="password" class="label">Password</label>
                                        <input id="password" name="password" type="password" class="input"
                                            placeholder="Enter your Password" required>
                                    </div>
                                    <br><br>
                                    <div class="group">
                                        <input type="submit" class="button" value="Sign In">
                                    </div>
                                </form>
                                <!-- Add this before the closing </body> tag -->
                                <script>
                                    // Display SweetAlert2 success message if it exists
                                    @if (session('success'))
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success!',
                                            text: '{{ session('success') }}',
                                        });
                                    @endif

                                    // Display SweetAlert2 error message if it exists
                                    @if (session('error'))
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error!',
                                            text: '{{ session('error') }}',
                                        });
                                    @endif
                                </script>

                            </div>
                            <!-- Form Sign Up -->
                            <div class="sign-up-form">
                                <br>
                                <form action="{{ url('signup') }}" method="post">
                                    @csrf
                                    <div class="group">
                                        <label for="nama_mhs" class="label">Username</label>
                                        <input id="nama_mhs" name="nama_mhs" type="text" class="input"
                                            placeholder="Create your Username" required>
                                    </div>
                                    <div class="group">
                                        <label for="nim" class="label">NIM</label>
                                        <input id="nim" name="nim" type="text" class="input"
                                            placeholder="Enter your NIM" required>
                                    </div>
                                    <div class="group">
                                        <label for="mail_mhs" class="label">Email Address</label>
                                        <input id="mail_mhs" name="mail_mhs" type="text" class="input"
                                            placeholder="Enter your Email address" required>
                                    </div>
                                    <div class="group">
                                        <label for="telp_mhs" class="label">Phone Number</label>
                                        <input id="telp_mhs" name="telp_mhs" type="text" class="input"
                                            placeholder="Enter your Phone Number" required>
                                    </div>
                                    <div class="group">
                                        <label for="password_signup" class="label">Password</label>
                                        <input id="password_signup" name="password" type="password" class="input"
                                            placeholder="Create your Password" required>
                                    </div>
                                    <div class="group"><br>
                                        <input type="submit" class="button" value="Sign Up">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

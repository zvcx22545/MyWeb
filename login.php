<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="text-center">
  <div class="background-logo">
    <div class="header">
      <h1 class="web">travel </h1>
      <h1 class="content">to Knowledge </h1>
    </div>
    <main class="form-signin w-100 ">
      <form id="loginForm">
        <h1 class="h3 mb-3 fw-normal"> Sign In</h1>
        <p class="please-sign-in">please sign in to continue</p>

        <div class="form-floating my-4">
          <input type="email" id="email" class="form-control" id="floatingInput" placeholder="name@example.com"
            required>
          <label for="floatingInput">Email address</label>
        </div>


        <div class="form-floating confirm--password my-4">
          <input type="password" id="password" class="form-control " id="floatingPassword"
            placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">Don't have an account Please? <a href="#">sing up</a></p>
  </div>
  </form>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="login.js"></script>


</body>

</html>
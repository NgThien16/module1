
  <div class="container mt-5">
    <form action="sign_up.php" method="post">
    <!--name-->
      <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input 
          class="form-control" 
          type="text" 
          id="name" 
          name="name" 
          placeholder="Enter your username " 
          required />
      </div>
      <!--email-->
      <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input 
          class="form-control" 
          type="text" 
          id="email" 
          name="email" 
          placeholder="Enter your email" 
          required />
      <!-- Password -->
      <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input 
          class="form-control" 
          type="password" 
          id="password" 
          name="password" 
          placeholder="Enter your password" 
          required />
      </div>
      <!-- Password Repeat-->
      <div class="mb-3">
        <label class="form-label" for="password">Confirm Password</label>
        <input 
          class="form-control" 
          type="password" 
          id="password" 
          name="confirm_password" 
          placeholder="Repeat your password" 
          required />
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary">Sign up</button>

    </form>
  </div>


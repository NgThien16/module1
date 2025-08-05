
  <div class="container mt-5">
    <form action="login.php" method="post">
      <!-- Username or Email -->
      <div class="mb-3">
        <label class="form-label" for="name">Name or Email</label>
        <input 
          class="form-control" 
          type="text" 
          id="name" 
          name="name" 
          placeholder="Enter your username or email" 
          required />
      </div>
      
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

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary">Login Now</button>

      <!-- Register link -->
      <div class="mt-3">
        <label class="form-label">Don't have an account? <a href="sign_up.php">Register now</a></label>
      </div>
    </form>
  </div>  

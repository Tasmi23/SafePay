document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  
  // Dummy authentication
  if (username === 'admin' && password === 'admin') {
      window.location.href = 'dashboard.html';
  } else if (username === 'employee' && password === 'employee') {
      window.location.href = 'dashboard.html';
  } else {
      alert('Invalid credentials');
  }
});

document.getElementById('registerForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const role = document.getElementById('role').value;
  
  // Dummy registration logic
  console.log(`Registered ${role}: ${username}`);
  alert(`Registered ${role}: ${username}`);
  window.location.href = 'login.html';
});

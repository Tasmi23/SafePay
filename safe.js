document.addEventListener('DOMContentLoaded', function() {
  const employeeInfo = [
      { name: 'John Doe', position: 'Software Engineer', salary: '5000' },
      { name: 'Jane Smith', position: 'Product Manager', salary: '6000' },
  ];

  const employeeInfoDiv = document.getElementById('employeeInfo');
  employeeInfo.forEach(employee => {
      const employeeDiv = document.createElement('div');
      employeeDiv.innerHTML = `<h3>${employee.name}</h3><p>Position: ${employee.position}</p><p>Salary: ${employee.salary}</p>`;
      employeeInfoDiv.appendChild(employeeDiv);
  });
});

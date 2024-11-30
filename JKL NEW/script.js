// Login Validation
document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  if (username === "admin" && password === "password123") {
    window.location.href = "dashboard.html";
  } else {
    document.getElementById('errorMessage').innerText = "Incorrect username or password.";
  }
});

// Sample patient data for Patient Dashboard
function addPatient() {
  const patientList = document.getElementById('patientList');
  const row = document.createElement('tr');
  row.innerHTML = `
    <td>Anvesh</td>
    
    <td>coventry</td>
    <td>Allergic to peanuts</td>
    <td><button onclick="removePatient(this)">Remove</button></td>
  `;
  patientList.appendChild(row);
}

function removePatient(element) {
  element.parentElement.parentElement.remove();
}

// Sample caregiver data for Caregiver Assignment
function assignCaregiver() {
  const caregiverList = document.getElementById('caregiverList');
  const row = document.createElement('tr');
  row.innerHTML = `
    <td>Jane Smith</td>
    <td>Anvesh</td>
    <td>Available</td>
    <td><button onclick="unassignCaregiver(this)">Unassign</button></td>
  `;
  caregiverList.appendChild(row);
}

function unassignCaregiver(element) {
  element.parentElement.parentElement.remove();
}

// Appointment Scheduling Submission
document.getElementById('appointmentForm').addEventListener('submit', function(e) {
  e.preventDefault();

  alert("Appointment scheduled successfully!");
  document.getElementById('appointmentForm').reset();
});

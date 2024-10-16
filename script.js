// scripts.js

// Sample doctor data (replace with dynamic fetching as needed)
var doctors = [
    { id: 1, name: 'Dr. Smith', specialization: 'Cardiology', available: true, salary: 120000, experience: 10 },
    { id: 2, name: 'Dr. Johnson', specialization: 'Pediatrics', available: false, salary: 100000, experience: 8 },
    // Add more doctors as needed
];

document.addEventListener('DOMContentLoaded', function() {
    // Populate doctor table on page load
    populateDoctorTable();

    // Handle form submission for adding a doctor
    var addDoctorForm = document.getElementById('addDoctorForm');
    addDoctorForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Extract form data
        var doctorName = document.getElementById('doctorName').value;
        var specialization = document.getElementById('specialization').value;
        var available = document.getElementById('available').value === 'true';
        var salary = parseInt(document.getElementById('salary').value);
        var experience = parseInt(document.getElementById('experience').value);

        // Add the new doctor to the array (simulate adding to database)
        var newDoctor = {
            id: doctors.length + 1,  // Generate ID based on current length (replace with actual ID assignment logic)
            name: doctorName,
            specialization: specialization,
            available: available,
            salary: salary,
            experience: experience
        };

        doctors.push(newDoctor);

        // Clear form fields
        addDoctorForm.reset();

        // Repopulate doctor table
        populateDoctorTable();
    });
});

// Function to populate the doctor table
function populateDoctorTable() {
    var doctorTableBody = document.getElementById('doctorTableBody');
    doctorTableBody.innerHTML = ''; // Clear existing rows

    doctors.forEach(function(doctor) {
        var row = document.createElement('tr');
        row.innerHTML = `
            <td>${doctor.id}</td>
            <td>${doctor.name}</td>
            <td>${doctor.specialization}</td>
            <td>${doctor.available ? 'Yes' : 'No'}</td>
            <td>${doctor.salary}</td>
            <td>${doctor.experience} years</td>
        `;
        doctorTableBody.appendChild(row);
    });
}
// patient
// scripts.js

// Sample patient data (replace with actual data handling logic)
var patients = [
    { id: 1, name: 'John Doe', doctorName: 'Dr. Smith', category: 'General Checkup', fees: 500 },
    { id: 2, name: 'Jane Smith', doctorName: 'Dr. Johnson', category: 'Pediatrics', fees: 600 },
    // Add more patients as needed
];

document.addEventListener('DOMContentLoaded', function() {
    // Populate patient table on page load
    populatePatientTable();
});

// Function to populate the patient table
function populatePatientTable() {
    var patientTableBody = document.getElementById('patientTableBody');
    patientTableBody.innerHTML = ''; // Clear existing rows

    patients.forEach(function(patient) {
        var row = document.createElement('tr');
        row.innerHTML = `
            <td>${patient.id}</td>
            <td>${patient.name}</td>
            <td>${patient.doctorName}</td>
            <td>${patient.category}</td>
            <td>${patient.fees}</td>
        `;
        patientTableBody.appendChild(row);
    });
}
// departments
// scripts.js

// Sample data (replace with actual data handling logic)
var doctors = [
    { id: 1, name: 'Dr. Smith', department: 'Casualty' },
    { id: 2, name: 'Dr. Johnson', department: 'Cardiology' },
    { id: 3, name: 'Dr. Williams', department: 'Psychiatry' },
    { id: 4, name: 'Dr. Brown', department: 'Neurology' },
    { id: 5, name: 'Dr. Davis', department: 'Pediatrics' },
    { id: 6, name: 'Dr. Miller', department: 'General Surgery' },
    // Add more doctors as needed
];

document.addEventListener('DOMContentLoaded', function() {
    // Count doctors in each department and update UI
    countDoctorsByDepartment();
});

// Function to count doctors in each department and update UI
function countDoctorsByDepartment() {
    var departments = {
        'Casualty': 0,
        'Cardiology': 0,
        'Psychiatry': 0,
        'Neurology': 0,
        'Pediatrics': 0,
        'General Surgery': 0
    };

    doctors.forEach(function(doctor) {
        if (departments.hasOwnProperty(doctor.department)) {
            departments[doctor.department]++;
        }
    });

    // Update UI with the counts
    document.getElementById('casualtyCount').textContent = departments['Casualty'];
    document.getElementById('cardiologyCount').textContent = departments['Cardiology'];
    document.getElementById('psychiatryCount').textContent = departments['Psychiatry'];
    document.getElementById('neurologyCount').textContent = departments['Neurology'];
    document.getElementById('pediatricsCount').textContent = departments['Pediatrics'];
    document.getElementById('surgeryCount').textContent = departments['General Surgery'];
}

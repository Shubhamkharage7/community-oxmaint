  <style>
      .btn-primary:hover {
          background-color: #fab758 !important;
          border-color: #fab758 !important;
      }

      footer a:hover {
          color: #fab758 !important;
      }

      #phone-content h1 {
          font-size: 18px;
          color: white;
      }

      #number-content a {
          font-size: 18px;
          color: #60697b;
      }

      .text-yellows {
          color: #0b1a80;
          font-size: 18px;
          line-height: 1.5em;
          font-weight: 800;
          text-align: left;

      }

      .banner-color {
          color: #15227a;
      }

      .gradient-5 {
          background-image: linear-gradient(359deg, #FDD133 0%, #FDD133 100%);

      }

      .text-yellows p {
          margin: 0.5em 0;
          display: flex;
          align-items: center;
      }

      .custom-alert {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
          justify-content: center;
          align-items: center;
      }

      .custom-alert-content {
          background-color: white;
          padding: 20px;
          border-radius: 8px;
          width: 500px;
          text-align: center;
          color: black;
      }

      .custom-alert-button {
          background-color: #15227a;
          color: white;
          border: none;
          padding: 10px 20px;
          margin-top: 15px;
          border-radius: 4px;
          width: 100px;
          cursor: pointer;
      }

      .custom-alert-button:hover {
          background-color: #fab758;
          color: black;
      }

      .cta-section {
          background: linear-gradient(45deg, #15227a, #0a1a61);
          color: #ffffff;
          padding: 50px 20px;
          border-radius: 10px;
          margin-top: 40px;
          --bs-gutter-x: 1.5rem;
          width: 100%;
          max-width: 1290px;
          margin-right: auto;
          margin-left: auto;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
          text-align: center;
      }

      .cta-section::before {
          content: "";
          display: block;
          height: 4px;
          width: 80px;
          margin: 0 auto 20px auto;
          background-color: #fab758;
          border-radius: 2px;
      }

      .cta-section h2 {
          font-size: 2.2rem;
          font-weight: bold;
          margin-bottom: 1rem;
      }

      .cta-section p {
          font-size: 1.1rem;
          line-height: 1.6;
          max-width: 600px;
          margin: 0 auto 1.5rem auto;
      }

      .cta-section .btn {
          font-size: 1.1rem;
          padding: 14px 32px;
          background-color: #ffffff;
          color: #15227a;
          border: none;
          border-radius: 25px;
          transition: all 0.3s ease;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .cta-section .btn:hover {
          background-color: #fab758;
          color: #ffffff;
      }

      .demo-button {
          background-color: #ffffff;
          color: #15227a;
          text-decoration: none;
          transition: all 0.3s ease;
          font-size: 15px;

      }

      .demo-button:hover {
          background-color: #15227a;
          color: #ffffff;
      }


      @media (max-width: 768px) {
          .cta-section h2 {
              font-size: 1.8rem;
          }

          .cta-section p {
              font-size: 1rem;
              margin-bottom: 1rem;
          }

          .cta-section .btn {
              font-size: 1rem;
              padding: 12px 28px;
          }
      }

      @media (min-width: 992px) {
          .custom-row {
              margin-left: -2rem;
              margin-right: 0rem;
          }
      }
      
      @media (min-width:1024px) {
            .sticky {
                position: sticky !important;
                top: 100px;
                z-index: 1;
                /*background-color: #fafafa;*/
                /* border-bottom-width: 3rem; */
                /* border-color: white; */
            }
        }
  </style>
  
  <div class="sticky">
    <div class="row sticky-row">
      <div class="card sticky-card mt-11" style="background-color: #EDF3FA;">
          <div class="card-body px-1 py-4 text-center">
              <h3 class="text-blue .fs-2"> Streamline Your Asset Management <br> See How <span style="color:#fdc500;">Oxmaint</span> Works!!</h3>
              <div class="text-yellows">
                  <p>✅ &nbsp;&nbsp;Work Order Management</p>
                  <p>✅ &nbsp;&nbsp;Asset Tracking</p>
                  <p>✅ &nbsp;&nbsp;Preventive Maintenance</p>
                  <p>✅ &nbsp;&nbsp;Inspection Report</p>
              </div>
              <form class="text-center">
                  <div class="form-floating mb-2">
                      <input type="text" class="form-control" placeholder="Name" id="loginName" required>
                      <label for="loginName">Name*</label>
                  </div>
                  <div class="form-floating mb-2">
                      <input type="text" class="form-control" placeholder="Company Name" id="loginCompanyName" required>
                      <label for="loginCompanyName">Company Name*</label>
                  </div>
                  <div class="form-floating mb-2">
                      <input type="email" class="form-control" placeholder="Email" id="loginEmail" required>
                      <label for="loginEmail">Business Email*</label>
                  </div>
                  <div class="form-floating mb-2">
                      <input type="number" class="form-control" placeholder="Phone Number" id="loginNumber">
                      <label for="loginNumber">Phone Number</label>
                  </div>
                  <button type="submit" class="btn btn-primary rounded btn-login w-50"> Sign Up</button>
              </form>
              <!-- Custom Alert Modal -->
              <div id="customAlert" class="custom-alert">
                  <div class="custom-alert-content">
                      <p>We have received your information. We will share Schedule Demo details on your Mail Id.</p>
                      <button onclick="closeAlert()" class="custom-alert-button">OK</button>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>


  <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Get the form element
          var form = document.querySelector('form');

          // Attach a submit event listener to the form
          form.addEventListener('submit', function(event) {
              event.preventDefault(); // Prevent the form from submitting

              // Get form data
              var name = document.getElementById('loginName').value;
              if (name.trim() === '') {
                  alert('Please enter name.');
                  return;
              };
              var companyEmail = document.getElementById('loginCompanyName').value;
              if (companyEmail.trim() === '') {
                  alert('Please enter Company name.');
                  return;
              };

              var workMail = document.getElementById('loginEmail').value;
              if (workMail.trim() === '') {
                  alert('Please enter Work Email.');
                  return;
              };

              var phoneNo = document.getElementById('loginNumber').value;

              // showLoadingScreen();
              var xhr = new XMLHttpRequest();
              xhr.open("POST", "https://prod-106.westeurope.logic.azure.com:443/workflows/06e00f1f03794e11bf70eb76dab34650/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=ib0aqQIxkAJ7aLAWcVy2p_rZWLoSz1ZYpnvbYfXSOm0", true);
              xhr.setRequestHeader("Content-Type", "application/json");

              var data = {
                  "name": name,
                  "companyName": companyEmail,
                  "email": workMail,
                  "phone": phoneNo
              };

              xhr.onreadystatechange = function() {
                  if (xhr.readyState === 4 && xhr.status === 200) {
                      showAlert("We have received your information. We will share Schedule Demo details on your Mail Id.");
                      document.getElementById('loginName').value = "";
                      document.getElementById('loginCompanyName').value = "";
                      document.getElementById('loginEmail').value = "";
                      document.getElementById('loginNumber').value = "";
                  }
              };

              xhr.send(JSON.stringify(data));
              return false;
          });
      });

      function showAlert(message) {
          var customAlert = document.getElementById('customAlert');
          customAlert.querySelector('p').innerText = message;
          customAlert.style.display = 'flex'; // Show the alert
      }

      function closeAlert() {
          document.getElementById('customAlert').style.display = 'none'; // Hide the alert
      }
  </script>
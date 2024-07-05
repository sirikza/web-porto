<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- my css -->
  <link rel="stylesheet" href="style.css">
  <title>My Portofolio | Muhammad Rikza Wangsa Wijaya</title>
  <link href="img/icon.png" rel="icon">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background-color: #ffffff;">
    <div class="container">
      <a class="navbar-brand fw-bold fs-3" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" href="index.html">My Portofolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-5" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <div class="container" style="color: #0f0f0f;" data-aos="zoom-in-up">
      <img src="img/za1.png" alt="rikza" width="200" class="rounded-circle img-thumbnail">
      <h3 class="mt-3 fw-bold">I'm</h3>
      <h1 id="full_name" class="display-4 fw-bold">Muhammad Rikza Wangsa Wijaya</h1>
      <!-- tentukan ID dengan nama yang mudah diingat -->
      <p id="job_position" class="lead fw-bold">Student | Web Designer</p>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -100 1240 350">
      <path fill="#0f0f0f" fill-opacity="1" d="M0,192L0,32L40,32L40,288L80,288L80,96L120,96L120,128L160,128L160,96L200,96L200,96L240,96L240,224L280,224L280,224L320,224L320,96L360,96L360,256L400,256L400,160L440,160L440,288L480,288L480,224L520,224L520,288L560,288L560,192L600,192L600,64L640,64L640,160L680,160L680,160L720,160L720,288L760,288L760,256L800,256L800,160L840,160L840,96L880,96L880,256L920,256L920,64L960,64L960,288L1000,288L1000,192L1040,192L1040,192L1080,192L1080,192L1120,192L1120,128L1160,128L1160,0L1200,0L1200,32L1240,32L1240,96L1280,96L1280,192L1320,192L1320,32L1360,32L1360,256L1400,256L1400,0L1440,0L1440,320L1400,320L1400,320L1360,320L1360,320L1320,320L1320,320L1280,320L1280,320L1240,320L1240,320L1200,320L1200,320L1160,320L1160,320L1120,320L1120,320L1080,320L1080,320L1040,320L1040,320L1000,320L1000,320L960,320L960,320L920,320L920,320L880,320L880,320L840,320L840,320L800,320L800,320L760,320L760,320L720,320L720,320L680,320L680,320L640,320L640,320L600,320L600,320L560,320L560,320L520,320L520,320L480,320L480,320L440,320L440,320L400,320L400,320L360,320L360,320L320,320L320,320L280,320L280,320L240,320L240,320L200,320L200,320L160,320L160,320L120,320L120,320L80,320L80,320L40,320L40,320L0,320L0,320Z"></path>
    </svg>

  </section>
  <!-- End Jumbotron -->
  <!-- About -->
  <section id="about" style="background-color: #0f0f0f;">
    <div class="container">
      <div class="row mb-3" data-aos="fade-right">
        <div class="col d-lg-block">
          <h1 class="fw-bold text-center text-light mb-3">About Me</h1>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <img src="img/za2.png" class="img-fluid d-none d-md-block" data-aos="fade-left" />
          </div>
          <!-- desktop -->
          <div class="col-lg-7 col-sm-12 d-lg-block">
            <div class="text-about text-light" data-aos="fade-right">
              <p class="mt-3 text-end fs-5">
                Let me introduce myself, my name is Muhammad Rikza Wangsa Wijaya. I was born in Ciamis on September 17, 2003. I live in Cihaurbeuti, Ciamis, West Java. Now I am studying at Galuh Ciamis University majoring in Information Systems. I have hobbies like drawing, football, basketball, swimming, playing music, and am also interested in physics, especially those that discuss astrophysics and quantum physics. While majoring in SI, I studied many lessons. Among the many things I studied, I was interested in web design or often referred to as a web designer.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 310">
      <path fill="#696969" fill-opacity="1" d="M0,224L0,160L37.9,160L37.9,160L75.8,160L75.8,96L113.7,96L113.7,160L151.6,160L151.6,160L189.5,160L189.5,96L227.4,96L227.4,224L265.3,224L265.3,128L303.2,128L303.2,288L341.1,288L341.1,224L378.9,224L378.9,32L416.8,32L416.8,96L454.7,96L454.7,288L492.6,288L492.6,288L530.5,288L530.5,64L568.4,64L568.4,160L606.3,160L606.3,128L644.2,128L644.2,96L682.1,96L682.1,192L720,192L720,256L757.9,256L757.9,0L795.8,0L795.8,128L833.7,128L833.7,192L871.6,192L871.6,256L909.5,256L909.5,288L947.4,288L947.4,224L985.3,224L985.3,192L1023.2,192L1023.2,160L1061.1,160L1061.1,288L1098.9,288L1098.9,64L1136.8,64L1136.8,96L1174.7,96L1174.7,96L1212.6,96L1212.6,128L1250.5,128L1250.5,96L1288.4,96L1288.4,0L1326.3,0L1326.3,192L1364.2,192L1364.2,256L1402.1,256L1402.1,64L1440,64L1440,320L1402.1,320L1402.1,320L1364.2,320L1364.2,320L1326.3,320L1326.3,320L1288.4,320L1288.4,320L1250.5,320L1250.5,320L1212.6,320L1212.6,320L1174.7,320L1174.7,320L1136.8,320L1136.8,320L1098.9,320L1098.9,320L1061.1,320L1061.1,320L1023.2,320L1023.2,320L985.3,320L985.3,320L947.4,320L947.4,320L909.5,320L909.5,320L871.6,320L871.6,320L833.7,320L833.7,320L795.8,320L795.8,320L757.9,320L757.9,320L720,320L720,320L682.1,320L682.1,320L644.2,320L644.2,320L606.3,320L606.3,320L568.4,320L568.4,320L530.5,320L530.5,320L492.6,320L492.6,320L454.7,320L454.7,320L416.8,320L416.8,320L378.9,320L378.9,320L341.1,320L341.1,320L303.2,320L303.2,320L265.3,320L265.3,320L227.4,320L227.4,320L189.5,320L189.5,320L151.6,320L151.6,320L113.7,320L113.7,320L75.8,320L75.8,320L37.9,320L37.9,320L0,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End About -->

  <!-- Projects -->
  <section id="projects">
    <div class="container" style="color: #0f0f0f;">
      <div class="row text-center mb-3">
        <div class="col">
          <h1 class="fw-bold mb-3" data-aos="fade-down">My Projects</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
          <div class="card" data-aos="fade-right">
            <img src="img/project/project1.png" class="card-img-top" alt="projects1" />
            <div class="card-body">
              <p class="card-text"> Perancangan Website Gadis Manies '95</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card" data-aos="fade-left">
            <img src="img/project/project2.png" class="card-img-top" alt="projects2" />
            <div class="card-body">
              <p class="card-text">Website Profile Polyphia</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center"></div>
        <div class="col-md-6 mb-3">
          <div class="card" data-aos="fade-right">
            <img src="img/project/project3.png" class="card-img-top" alt="projects3" />
            <div class="card-body">
              <p class="card-text">Website Portofolio M Rikza</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card" data-aos="fade-left">
            <img src="img/project/project4.png" class="card-img-top" alt="projects3" />
            <div class="card-body">
              <p class="card-text">Mockup Web</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0f0f0f" fill-opacity="1" d="M0,224L0,32L36.9,32L36.9,32L73.8,32L73.8,256L110.8,256L110.8,64L147.7,64L147.7,288L184.6,288L184.6,160L221.5,160L221.5,288L258.5,288L258.5,224L295.4,224L295.4,288L332.3,288L332.3,160L369.2,160L369.2,128L406.2,128L406.2,32L443.1,32L443.1,320L480,320L480,96L516.9,96L516.9,320L553.8,320L553.8,192L590.8,192L590.8,224L627.7,224L627.7,192L664.6,192L664.6,96L701.5,96L701.5,192L738.5,192L738.5,96L775.4,96L775.4,96L812.3,96L812.3,256L849.2,256L849.2,192L886.2,192L886.2,192L923.1,192L923.1,64L960,64L960,224L996.9,224L996.9,192L1033.8,192L1033.8,320L1070.8,320L1070.8,64L1107.7,64L1107.7,128L1144.6,128L1144.6,128L1181.5,128L1181.5,0L1218.5,0L1218.5,224L1255.4,224L1255.4,256L1292.3,256L1292.3,192L1329.2,192L1329.2,192L1366.2,192L1366.2,0L1403.1,0L1403.1,224L1440,224L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path>
    </svg>
  </section>
  <!-- End Projects -->
  <!-- Contact -->
  <section id="contact" style="background-color: #0f0f0f;">
    <div class="container pb-5">
      <div class="row text-center text-light">
        <div class="col">
          <h1 class="fw-bold mb-3" data-aos="fade-right">Contact Me</h1>
        </div>
      </div>
      <div class="row justify-content-center mb-3 text-light" data-aos="fade-down">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label" data-aos="fade-left">Your Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label" data-aos="fade-right">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" />
            </div>
            <div class="mb-3">
              <label for="text" class="form-label" data-aos="fade-left">Message</label>
              <textarea class="form-control" id="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-danger fw-bold text-white" data-aos="fade-right">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact -->

  <!-- User Skills -->

  <section id="skills" style="background-color: #696969;">
    <div class="container">
      <h1 class="fw-bold text-center mb-3" data-aos="fade-left" style="color: #0f0f0f;">SKILLS
      </h1>
      <div class="card-dark" data-aos="fade-left">
        <div class="card-header">
          <div class="row">
            <div class="col col-sm-9 fw-bold">Lenguage Programming</div>
            <div class="col col-sm-3">
              <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="sample_data">
              <thead>
                <tr class="text-center">
                  <th>User ID</th>
                  <th>Skill Name</th>
                  <th>Rating (0/100)</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal" tabindex="-1" id="action_modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" id="sample_form">
              <div class="modal-header">
                <h5 class="modal-title" id="dynamic_modal_title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">User ID</label>
                  <input type="text" name="user_id" id="user_id" class="form-control" />
                  <span id="user_id_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Skill Name</label>
                  <input type="skill_name" name="skill_name" id="skill_name" class="form-control" />
                  <span id="skill_name_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Rating</label>
                  <input type="rating" name="rating" id="rating" class="form-control" />
                  <span id="rating_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Description</label>
                  <input type="text" name="description" id="description" class="form-control" />
                  <span id="description_error" class="text-danger"></span>
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id" id="id" />
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="action_button">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="" style="margin-bottom: -20px;">
    <div class="footer-bottom" style="background-color: #ffffff;">
      <p class="link p-3 text-center">© Copyright 2024 <a class="text-danger text-decoration-none" href="https://www.instagram.com/mrwangsawijaya_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Muhammad Rikza Wangsa Wijaya</a></p>
    </div>
  </footer>
  <!-- End Footer -->

  <script>
    $(document).ready(function() {
      showAll();

      function showAll() {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "http://localhost/web-porto-rikza/si-admin/api/users/read.php?id=",
          success: function(response) {
            $("#full_name").text(response.full_name); //mengubah elemen html dengan .text(nilai) atau .html(nilai)
            $("#job_position").text(response.job + " | " + response.expected_position);
          },
          error: function(err) {

          }
        })
      }
    })
  </script>

  <script>
    $(document).ready(function() {
      showAll();

      $('#add_data').click(function() {
        $('#dynamic_modal_title').text('Add User Skills');
        $('#sample_form')[0].reset();
        $('#action').val('Add');
        $('#action_button').text('Add');
        $('.text-danger').text('');
        $('#action_modal').modal('show');
      });

      $('#sample_form').on('submit', function(event) {
        event.preventDefault();
        if ($('#action').val() == "Add") {
          var formData = {
            'user_id': $('#user_id').val(),
            'skill_name': $('#skill_name').val(),
            'rating': $('#rating').val(),
            'description': $('#description').val()
          }

          $.ajax({
            url: "http://localhost/web-porto-rikza/si-admin/api/skills/create.php",
            method: "POST",
            data: JSON.stringify(formData),
            success: function(data) {
              $('#action_button').attr('disabled', false);
              $('#message').html('<div class="alert alert-success">' + data.message + '</div>');
              $('#action_modal').modal('hide');
              $('#sample_data').DataTable().destroy();
              showAll();
            },
            error: function(err) {
              console.log(err);
            }
          });
        } else if ($('#action').val() == "Update") {
          var formData = {
            'id': $('#id').val(),
            'user_id': $('#user_id').val(),
            'skill_name': $('#skill_name').val(),
            'rating': $('#rating').val(),
            'description': $('#description').val()
          }

          $.ajax({
            url: "http://localhost/web-porto-rikza/si-admin/api/skills/update.php",
            method: "PUT",
            data: JSON.stringify(formData),
            success: function(data) {
              $('#action_button').attr('disabled', false);
              $('#message').html('<div class="alert alert-success">' + data.message + '</div>');
              $('#action_modal').modal('hide');
              $('#sample_data').DataTable().destroy();
              showAll();
            },
            error: function(err) {
              console.log(err);
            }
          });


        }
      });
    });

    function showAll() {
      $.ajax({
        type: "GET",
        contentType: "application/json",
        url: "http://localhost/web-porto-rikza/si-admin/api/skills/read.php",
        success: function(response) {
          // console.log(response);
          var json = response.body;
          var dataSet = [];
          for (var i = 0; i < json.length; i++) {
            var sub_array = {
              'user_id': json[i].user_id,
              'skill_name': json[i].skill_name,
              'rating': json[i].rating,
              'description': json[i].description,
              'action': '<button onclick="showOne(' + json[i].id + ')" class="btn btn-sm btn-warning">Edit</button>' +
                '<button onclick="deleteOne(' + json[i].id + ')" class="btn btn-sm btn-danger">Delete</button>'
            };
            dataSet.push(sub_array);
          }
          $('#sample_data').DataTable({
            data: dataSet,
            columns: [{
                data: "user_id"
              },
              {
                data: "skill_name"
              },
              {
                data: "rating"
              },
              {
                data: "description"
              },
              {
                data: "action"
              }
            ]
          });
        },
        error: function(err) {
          console.log(err);
        }
      });
    }

    function showOne(id) {
      $('#dynamic_modal_title').text('Edit User Skills');
      $('#sample_form')[0].reset();
      $('#action').val('Update');
      $('#action_button').text('Update');
      $('.text-danger').text('');
      $('#action_modal').modal('show');

      $.ajax({
        type: "GET",
        contentType: "application/json",
        url: "http://localhost/web-porto-rikza/si-admin/api/skills/read.php?id=" + id,
        success: function(response) {
          $('#id').val(response.id);
          $('#user_id').val(response.user_id);
          $('#skill_name').val(response.skill_name);
          $('#rating').val(response.rating);
          $('#description').val(response.description);

        },
        error: function(err) {
          console.log(err);
        }
      });
    }

    function deleteOne(id) {
      alert('Yakin untuk hapus data ?');
      $.ajax({
        url: "http://localhost/web-porto-rikza/si-admin/api/skills/delete.php",
        method: "DELETE",
        data: JSON.stringify({
          "id": id
        }),
        success: function(data) {
          $('#action_button').attr('disabled', false);
          $('#message').html('<div class="alert alert-success">' + data + '</div>');
          $('#action_modal').modal('hide');
          $('#sample_data').DataTable().destroy();
          showAll();
        },
        error: function(err) {
          console.log(err);
        }
      });
    }
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Personal Detail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
</head>

<body>
    <form class="row g-3 needs-validation" novalidate>

        <div class="bg">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 paper">
                    <!-- personal detail -->
                    <div class="personal-detail">
                        <!-- title -->
                        <div class="tittle">Personal Details</div>
                        <!-- akhir title -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="label-text-l">Wanted Job Title</span>
                                <i class="fa-regular fa-circle-question"></i>
                                <div class="input-group mb-3">
                                    <input type="text" min="3" class="form-control l" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="label-text-r">Foto</span>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control r" required>
                                </div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="label-text-l">First Name</span>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control l" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="label-text-r">Last Name</span>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control r" required>
                                </div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="label-text-l">Email</span>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control l" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="label-text-r">Phone</span>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control r" required>
                                </div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="label-text-l">Country</span>
                                <div class="input-group mb-3">
                                    <select name="" class="form-control l" required>
                                        <option value="1">Indonesia</option>
                                        <option value="2">Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="label-text-r">City</span>
                                <div class="input-group mb-3">
                                    <select name="" class="form-control r" required>
                                        <option value="1">lajsdjsa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="label-text-l">Address</span>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control l" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="label-text-r">Postal Code</span>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control r" required>
                                </div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="label-text-l">Driving Licence</span>
                                <i class="fa-regular fa-circle-question"></i>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control l" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="label-text-r">Nationality</span>
                                <i class="fa-regular fa-circle-question"></i>
                                <div class="input-group mb-3">
                                    <select name="" class="form-control r" required>
                                        <option value="WNI">Warga Negara Indonesia (WNI)</option>
                                        <option value="WNA">Warga Negara Asing (WNA)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="label-text-l">Place Of Birth</span>
                                <div class="input-group mb-3">
                                    <input type="text" pattern="[A-Za-z]{>3}" class="form-control l" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="label-text-r">Date Of Birth</span>
                                <i class="fa-regular fa-circle-question"></i>
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control r" required>
                                </div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                    </div>
                    <!-- akhir personal detail -->
                    <!-- summary -->
                    <div class="personal-detail">
                        <!-- title -->
                        <div class="tittle">Professional Summary</div>
                        <!-- akhir title -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="label-text-l">Write 2-4 short & energetic sentence to interest the reader! Mention you role, experience & most importantly - your biggest achievements, best qualities and skills.</div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-12 editor">
                                <textarea id="editor" name="summary"></textarea>
                            </div>
                        </div>
                        <!-- akhir baris -->
                    </div>
                    <!-- akhir summary -->
                    <!-- employment History -->
                    <div class="personal-detail">
                        <!-- title -->
                        <div class="tittle">Employment History</div>
                        <!-- akhir title -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="label-text-l">Show your relevant experience (last 10 years). Use bullet points to note your achieevements, if possible - use numbers/ fact (Achieved X, measured by Y, by doing Z).</div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fa-regular fa-plus"></i>
                                <span class="added">Add Employment</span>
                            </div>
                        </div>
                        <!-- akhir baris -->
                    </div>
                    <!-- akhir employment History -->
                    <!-- Education -->
                    <div class="personal-detail">
                        <!-- title -->
                        <div class="tittle">Education</div>
                        <!-- akhir title -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="label-text-l">A varied education on your resume sums up the value that your learnings and background will bring to job.</div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fa-regular fa-plus"></i>
                                <span class="added">Add Education</span>
                            </div>
                        </div>
                        <!-- akhir baris -->
                    </div>
                    <!-- akhir Education -->
                    <!-- Skills -->
                    <div class="personal-detail">
                        <!-- title -->
                        <div class="tittle">Skills</div>
                        <!-- akhir title -->
                        <!-- baris -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="label-text-l">Choose 5 of the most important skills to show your talents! Make sure they match the keywords of the job listing if appliying via an online system.</div>
                            </div>
                        </div>
                        <!-- akhir baris -->
                        <!-- baris -->
                        <div class="row">
                            <div class="skills_list">
                                <span class="badge bg-secondary">New</span>
                            </div>
                            <div class="col-md-6">
                                <i class="fa-regular fa-plus"></i>
                                <span class="added">Add Skills</span>
                            </div>
                        </div>
                        <!-- akhir baris -->
                    </div>
                    <!-- akhir Skills -->
                    <button class="btn btn-primary" type="submit">Apply Form</button>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </form>

    <style lang="textstyle/css">
        body {
            background-color: #000000;
        }

        .paper {
            background-color: #FFFFFF;
            padding: 30px;
        }

        .tittle {
            margin-bottom: 10px;
            margin-top: 40px;
            font-weight: bold;
            font-size: 18px;
            margin-left: 30px;
        }

        .l {
            margin-top: 5px;
            margin-left: 30px;
            margin-right: 15px;
            border-color: #F0F2F9;
            background-color: #F0F2F9;

        }

        .r {
            margin-top: 5px;
            margin-left: 15px;
            margin-right: 30px;
            border-color: #F0F2F9;
            background-color: #F0F2F9;
        }

        .label-text-l {
            margin-left: 30px;
            font-size: 12px;
            color: #ABB0C0;
        }

        .label-text-r {
            margin-left: 15px;
            font-size: 12px;
            color: #ABB0C0;
        }

        .fa-circle-question {
            color: #75BAF5;
        }

        .editor {
            margin-left: 10px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .fa-plus {
            margin-top: 20px;
            margin-left: 40px;
            color: #2C99F1;
        }

        .added {
            margin-top: 20px;
            color: #2C99F1;
            font-weight: bold;
            font-size: 12px;
        }

        .bg-secondary {
            margin-left: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .btn-primary{
            margin-top: 40px;
            width: 100%;
        }

        #editor {
            border-radius: 10px;
            background-color: #F8F8F8;

        }
    </style>
    <script>
        CKEDITOR.replace('editor', {
            height: 100,
            size: 2

        });

        (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>
</body>

</html>
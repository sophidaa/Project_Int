<x-app-layout>



<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>คำขอใช้ระบบ</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="table">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>รายการ อปท.ที่ใช้งาน</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block ">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div>
                        <h3 class="font-semibold text-gray-800 leading-tight">รายการอปท.ที่ใช้งาน</h3>
                </div>

                <!-- table คำขอใช้ระบบ -->
                <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อ-นามสกุล</th>
                                            <th>เบอร์ติดต่อ</th>
                                            <th>จังหวัด</th>
                                            <th>ชื่อ อปท. ที่ขอใช้</th>
                                            <th>หมายเหตุ</th>
                                            <th>รายละเอียด</th>
                                        </tr>
                                    </thead>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> <button class="btn btn-success btn-user btn-block" id="myBtn">รายละเอียด</button> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                    <tr>

                                </table>
                            </div>
                        </div>
                    </div>
            

                </div>

            </div>


        </div>

    </div>
    <!-- End of Content Wrapper -->

</div>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


</body>
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet"></link>
  <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet"></link>
  <link href="{{ asset('admin/css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"></link>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <link rel='stylesheet' href='https://demo.themesberg.com/pixel-pro/css/pixel.css'>
  

    <div id="myModal" class="modal">
  <!-- Modal content -->
<div class="modal-dialog-scrollable .modal-content" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="demoModalLabel">รายละเอียด อปท.</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>
						<div class="modal-body">

                    <div class="section section-md py-5">
                     <div class="container">
       
       
       
       <!-- Title  -->
      <div class="row">
         <div class="col-md-4 text-center mx-auto">
         </div>
      </div>
      <div class="row mt-4">
         <div class="col-md-10 mx-auto">
            <!-- Timeline -->
            <div class="timeline timeline-one">
               <!-- Timeline Item 1 -->
               <div class="timeline-item">
                  <h5 class="my-3">เริ่มขอใช้งาน</h5>
                  <p>เริ่มขอใช้งาน (รายละเอียด ผู้ขอ)วันที</p>
               </div>
               <!-- Timeline Item 2 -->
               <div class="timeline-item">
                  <h5 class="my-3">อัพเดตโฟร์งาน</h5>
                  <p>อัพเดตโฟร์งาน (รายละเอียด รูป)วันที</p>
                  <a href=" ">
                  <h1 class="h6 mb-4">Update</h1>
                  </a>
               </div>
               <!-- Timeline Item 3 -->
               <div class="timeline-item">
                  <h5 class="my-3">เริ่มใช้จริง</h5>
                  <p>เริ่มใช้จริง (รายละเอียด ไฟล์ pdf) วันที</p>
               </div>
            </div>
            <!--End of Timeline-->
         </div>
      </div>
 </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[1];
// When the user clicks the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
</script>
</script>
</x-app-layout>

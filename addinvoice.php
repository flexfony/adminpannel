

<?php 
    include('include/topbar.php');
    include('include/sidenavbar.php');
?>

      <!--Contents starts from here-->
      <h3 class="m-title text-light ms-3 p-3">Add Invoices</h3>
          <div class="main-area w-90 mx-auto" style="">
           <!--Card Area-->
              <div class="row g-5">
                <div class="col-12 text-secondary">
                  <div class="card bg-dark box-shadow2">
                    <div class="card-header text-success table-responsive ">
                    <div class="action-container d-flex pb-2 justify-content-between">
                    <form action="search" class="ms-3 float-end">
                      <input type="text" class="py-1" placeholder="Search Invoice...">
                      <button type="submit" class="btn btn-sm table-search-btn"><i class="fas fa-search"></i></button>
                    </form>
                    <div>
                    <button class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-file-medical me-2"></i>Add New</button>
                    <button class="btn btn-outline-info ms-2"><i class="fas fa-copy me-2"></i>View all</button>
                    </div>
                    </div>
                    <table class="table table-resizable text-dimlight">
  <thead>
    <tr class="">
      <th class="fw-bold" scope="col">Sl.</th>
      <th class="fw-bold input-date" scope="col" width="50px">Invoice Date</th>
      <th class="fw-bold input-date" scope="col" width="50px">Delivery Date</th>
      <th class="fw-bold" scope="col">Invoice No.</th>
      <th class="fw-bold" scope="col">Seller Name</th>
      <th class="fw-bold" scope="col">Address</th>
      <th class="fw-bold" scope="col" width="120px">Mobile No.</th> 
      <th class="fw-bold" scope="col" width="90px">Actions</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">5</th>
      <td>11/05/2021</td>
      <td>12/05/2021</td>
      <td>MBPUR/2021-22/005</td>
      <td>Abhimanyu Shrivastava</td>
      <td>New Market, Address,Ranchi, India</td>
      <td>07870145546</td>
      <td class="" scope="">
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></button>
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Items"><i class="fas fa-plus-circle"></i></button>
      </td>
  </tr>

  <tr>
      <th scope="row">4</th>
      <td>11/05/2021</td>
      <td>12/05/2021</td>
      <td>MBPUR/2021-22/004</td>
      <td>Kanchan Sharma</td>
      <td>Hirapur, Address,Dhanbad, India</td>
      <td>07870145546</td>
      <td class="" scope="">
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top"title="Edit"><i class="fas fa-pencil-alt"></i></button>
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Items"><i class="fas fa-plus-circle"></i></button>
      </td>
  </tr>
  <tr>
      <th scope="row">3</th>
      <td>11/05/2021</td>
      <td>12/05/2021</td>
      <td>MBPUR/2021-22/003</td>
      <td>Kanchan Sharma</td>
      <td>Bank More, Address,Dhanbad, India</td>
      <td>07870145546</td>
      <td class="" scope="">
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></button>
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Items"><i class="fas fa-plus-circle"></i></button>
      </td>
  </tr>
  <tr>
      <th scope="row">2</th>
      <td>11/05/2021</td>
      <td>12/05/2021</td>
      <td>MBPUR/2021-22/002</td>
      <td>Kanchan Sharma</td>
      <td>Bank More, Address,Dhanbad, India</td>
      <td>07870145546</td>
      <td class="" scope="">
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></button>
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Items"><i class="fas fa-plus-circle"></i></button>
      </td>
    </tr>

    <tr>
      <th scope="row">1</th>
      <td>12/05/2021</td>
      <td>13/05/2021</td>
      <td>MBPUR/2021-22/001</td>
      <td>Vishwajeet Thakur</td>
      <td>Nayabazar, Address, 1100011, India</td>
      <td>07870145546</td>
      <td class="" scope="">
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fas fa-pencil"></i></button>
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Items"><i class="fas fa-plus-circle"></i></button>
      </td>
    </tr>
  

  </tbody>
</table>
                    </div>
                  </div> 
                </div>
              </div>
           <!--Card Area-->

           <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark text-dimlight box-shadow2">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Invoice</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dimlight">
      <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control wwwr" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control wwwr" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control wwwr" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control wwwr" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control wwwr" id="inputCity">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control wwwr" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="d-flex flex-row-reverse">
    <button type="button float-end" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
    <button type="submit float-end" class="btn btn-outline-info me-3">Save</button>
  </div>
</form>
      </div>
      
    </div>
  </div>
</div>
        </div>
      </div>
<!--end mainmain-->
</div>
</div>
</div>

<?php 
    include('include/footer.php');
?>
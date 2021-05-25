

<?php 
    include('include/topbar.php');
    include('include/sidenavbar.php');
?>

      <!--Contents starts from here-->
      <h3 class="m-title text-light ms-3 p-3">Add Products</h3>
          <div class="main-area w-90 mx-auto" style="">
           <!--Card Area-->
              <div class="row g-5">
                <div class="col-12 text-secondary">
                  <div class="card bg-dark box-shadow2">
                    <div class="card-header text-success table-responsive ">
                    <table class="table table-resizable text-dimlight"
                      data-toggle="table"
                      data-pagination="true"
                      data-search="true"
                    >
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
    <form action="">
  <th scope="row">6</th>
      <td><input type="date" class="form-control input-date" required></td>
      <td><input type="date" class="form-control input-date" required></td>
      <td><input type="text" class="form-control" placeholder="Invoice No." required></td>
      <td><input type="text" class="form-control" placeholder="Name" required></td>
      <td><input type="text-area" class="form-control" placeholder="Address" required></td>
      <td><input type="tel" class="form-control" placeholder="Mobile" maxlength="10"  width="90px" required></td>
      <td class="" scope="">
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Save"><i class="fas fa-save"></i></button>
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Items"><i class="fas fa-plus-circle"></i></button>
      </td>
      </form>
  </tr>

      <th scope="row">5</th>
      <td>11/05/2021</td>
      <td>12/05/2021</td>
      <td>MBPUR/2021-22/005</td>
      <td>Abhimanyu Shrivastava</td>
      <td>New Market, Address,Ranchi, India</td>
      <td>07870145546</td>
      <td class="" scope="">
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Save"><i class="fas fa-save"></i></button>
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
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Save"><i class="fas fa-save"></i></button>
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
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Save"><i class="fas fa-save"></i></button>
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
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Save"><i class="fas fa-save"></i></button>
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
        <button type="submit" class="btn btn-sm btn-dimlight" data-bs-toggle="tooltip" data-bs-placement="top" title="Save"><i class="fas fa-save"></i></button>
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
        </div>
      </div>
<!--end mainmain-->
</div>

<?php 
    include('include/footer.php');
?>
@extends('layout.index')


@section('content')
<!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Danh sách bằng</h4>

                        <!-- <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">CvChain</a></li>
                            <li class="breadcrumb-item"><a href="#">Quản lý bằng</a></li>
                            <li class="breadcrumb-item active">Danh sách</li>
                        </ol> -->

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
               
                <div class="col-lg-12">
                    <div class="card-box">
                          <div class="row">
        <div class="col-12 m-b-30">
            <div class="p-20">
             
                    <div class="form-group row">
                        <div class="col-8">
                            <!-- input-group vào là nó cùng 1 dòng  -->
                            <div class="input-group">
                                <input type="text" class="form-control" ng-model="keyword" placeholder="Bạn hãy nhập tên sinh viên cần tìm">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button" ng-click="search()">Tìm kiếm</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                       
                        <div class="col-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Thêm mới</button>
                        </div>
                        
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">

                             

                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                           
                              <div class="modal-body">

                            

                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Tên sinh viên</label>
                                    <input type="text" class="form-control" id="studentname" value="Nguyễn Văn A">
                                  </div>

                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Giới tính</label>
                                         <input type="text" class="form-control"  id="studentgender" value="0">
                                  </div>

                                  <div class="form-group">
                                    <label for="major">Chuyên ngành:</label>
                                    <select class="form-control" id="major" >
                                      <option>Công nghệ thông tin</option>
                                       <option>Quản trị kinh doanh</option>
                                    </select>  
                                  </div>

                                  <div class="form-group">
                                    <label for="Mode_study">Hệ đào tạo:</label>
                                    <select class="form-control" id="modestudy" >
                                      <option>Trung cấp</option>
                                      <option>Cao đẳng</option>
                                      <option>Cử nhân</option>
                                      <option>Thạc sĩ</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="Type_tranning">Hình thức đào tạo:</label>
                                    <select class="form-control" id=" trainingtype" >
                                      <option>Tại chức</option>
                                      <option>chính quy/option>
                                      <option>vừa học vừa làm</option>
                                      <option>vừa làm vừa học</option>
                                    </select>
                                  </div>                                

                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Xếp loại</label>
                                       <input type="text" class="form-control" id="studentrank"   value="Khá">
                                  </div>
                                  
                                  <div class="row">
                                      <div class="col"><label for="message-text" class="col-form-label">Niên khóa</label></div>
                                  </div>

                                  <div class="row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Từ năm">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Đến năm">
                                    </div>
                                  </div>                                  
                             
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button class="btn btn-primary" onclick="insertDiploma()">Thêm</button>
                              </div>
                            
                            </div>
                          </div>
                        </div>
                    </div>                        
            </div>
        </div>

    </div>
                       
                
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th>Tên sinh viên</th>
                                <th>Giới tính</th>
                                <th>Chuyên nghành</th>
                                <th>Xếp loại</th>
                                <th>Niên khóa</th>
                                 <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>

                              @foreach($diploma as $dip)
                            <tr>
                                <th >{{$dip->name}}</th>
                                <td>
                                  {{$dip->gender}}
                                </td>
                                <td>{{$dip->Major->name}}</td>
                                <td>{{$dip->rank}}</td>
                                <td>{{$dip->to_year}}</td>
                                <td ><a href=""><span class="badge badge-success  badge-pill">Xem</span></a></td>
                            </tr>
                            @endforeach

                            <tr>
                                <th>Đỗ Thị Thanh Thảo</th>
                                <td>Nữ</td>
                                <td>IT</td>
                                <td>Giỏi</td>
                                 <td>2020</td>
                                   <td ><a href=""><span class="badge badge-success  badge-pill">Xem</span></a></td>
                            </tr>


                            <tr>
                                <th>Lý Bá Đông</th>
                                <td>Nam</td>
                                <td>IT</td>
                                <td>Giỏi</td>
                                 <td>2020</td>
                                    <td >
                                      <a href="" data-toggle="modal" data-target="#studentModal" ><span  class="badge badge-success  badge-pill">Xem</span></a></td>
                            </tr>
                            </tbody>
                            <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bằng</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Tên sinh viên</label>
                                    <input type="text" class="form-control" id="" value="Nguyễn Văn A">
                                  </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Giới tính</label>
                                          <input type="text" class="form-control" id="inputEmail4" value="Nam">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Chuyên nghành</label>
                                          <input type="text" class="form-control" id="inputPassword4" value="IT">
                                        </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Xếp loại</label>
                                          <input type="text" class="form-control" id="inputEmail4" value="Khá">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Niên khóa</label>
                                          <input type="text" class="form-control" id="inputPassword4" value="2020">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1" >QR Code</label>
                                      <div id="qrcode" class='center-block'></div>
                                      </div>
                              
                               
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              </div>
                            </div>
                          </div>
                        </div>


                        </table>
            <div class="dataTables_paginate paging_simple_numbers">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled">
                        <a href="" class="page-link">Trước</a>
                    </li>
                    <li class="paginate_button page-item active">
                        <a href="" class="page-link">1</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="" class="page-link">2</a>
                    </li>

                    <li class="paginate_button page-item next">
                        <a href="" class="page-link">Tiếp</a>
                    </li>

                    
                </ul>
            </div>   
                    </div>


                </div>

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

@endsection
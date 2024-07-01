 <section class="block-wrapper">

     <style>
         .card {
             border: 1px solid #ccc;
             border-radius: 5px;
             box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
             margin-bottom: 20px;
         }

         .card-header {
             background-color: #f8f9fa;
             border-bottom: 1px solid #ccc;
             padding: 5px 10px;
         }

         .card-body {
             padding: 10px;
         }

         table {
             width: 100%;
             border-collapse: collapse;
         }

         table th {
             background-color: #f8f9fa;
             border: 1px solid #ccc;
             padding: 5px;
             text-align: left;
         }

         table td {
             border: 1px solid #ccc;
             padding: 5px;
         }
     </style>

     <div class="container">
         <div class="row">

             <div class="col-md-12 col-sm-12 content-blocker">

                 <!-- block content -->
                 <div class="block-content">

                     <!-- single-post box -->
                     <div class="single-post-box">

                         <div class="title-post">
                             <h1>APBD DESA</h1>
                         </div>

                         <div class="post-content">
                             <div class="card">
                                 <div class="card-header">
                                     <h3>Pendapatan Desa</h3>
                                 </div>
                                 <div class="card-body">
                                     <table>
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <th>Uraian</th>
                                                 <th>Anggaran Pendapatan</th>
                                                 <th>Sumber Dana</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach ($pendapatan as $item)
                                                 <tr>
                                                     <td>{{ $loop->iteration }}</td>
                                                     <td>{{ $item->uraian }}</td>
                                                     <td>{{ $item->anggaran }}</td>
                                                     <td>{{ $item->sumber_dana }}</td>
                                                 </tr>
                                             @endforeach
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <h3>Belanja Desa</h3>
                                 </div>
                                 <div class="card-body">
                                     <table>
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <th>Uraian</th>
                                                 <th>Anggaran Belanja</th>
                                                 <th>Sumber Dana</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach ($belanja as $item)
                                                 <tr>
                                                     <td>{{ $loop->iteration }}</td>
                                                     <td>{{ $item->uraian }}</td>
                                                     <td>{{ $item->anggaran }}</td>
                                                     <td>{{ $item->sumber_dana }}</td>
                                                 </tr>
                                             @endforeach
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <h3>Pembiayaan Desa</h3>
                                 </div>
                                 <div class="card-body">
                                     <table>
                                         <thead>
                                             <tr>
                                                 <th>No</th>
                                                 <th>Uraian</th>
                                                 <th>Anggaran Pembiayaan</th>
                                                 <th>Sumber Dana</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach ($pembiayaan as $item)
                                                 <tr>
                                                     <td>{{ $loop->iteration }}</td>
                                                     <td>{{ $item->uraian }}</td>
                                                     <td>{{ $item->anggaran }}</td>
                                                     <td>{{ $item->sumber_dana }}</td>
                                                 </tr>
                                             @endforeach
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <!-- End single-post box -->

                 </div>
                 <!-- End block content -->

             </div>


         </div>

     </div>
 </section>

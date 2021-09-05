

<div class="container mt-5">
<div class="card" >
  <div class="card-header">
    Book list
  </div>
  <div class="card-body">
    <a href="index.php?page=book-create" type="button" class="btn btn-primary mb-3">Add New Book</a>
    
   
  <table class="table">
  <thead>

    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($books as $book): ?>
    <tr>
      <th><?php echo $book['id'] ?></th>
      <td><?php echo $book['name'] ?></td>
      <td><?php echo $book['author'] ?></td>
      <td><?php echo $book['category'] ?></td>
      <td><?php echo $book['description'] ?></td>
      <td><a href="index.php?page=book-update&id=<?php echo $book['id']?>" type="button" class="btn btn-warning">Edit</a></td>
     <td><a onclick="return confirm('Ban chac muon xoa ?')" href="index.php?page=book-delete&id=<?php echo $book['id']?>" type="button" class="btn btn-danger">Delete</a></td> 
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
  </div>
</div>
</div>      
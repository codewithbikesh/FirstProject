function validateForm() {
    let x = document.forms["myForm"]["Name"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }

//   <div class="row">
//   <div class="col-md-6" >
//     <button type="submit" class=" btn btn-outline-danger mt-3 fw-bolder" name="submit">View</button>
//   </div>
//   <div class="col-md-6">
//     <button type="submit" class=" btn btn-outline-danger mt-3 fw-bolder" name="submit">Update</button>
//   </div>
// </div>

// delete and update button 
// <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
//       </tr>

    // edits = document.getElementsByClassName('edit');
    // Array.from(edits).forEach((element) => {
    //   element.addEventListener("click", (e) => {
    //     console.log("edit ");
    //     tr = e.target.parentNode.parentNode;
    //     title = tr.getElementsByTagName("td")[0].innerText;
    //     description = tr.getElementsByTagName("td")[1].innerText;
    //     console.log(title, description);
    //     titleEdit.value = title;
    //     descriptionEdit.value = description;
    //     snoEdit.value = e.target.id;
    //     console.log(e.target.id)
    //     $('#editModal').modal('toggle');
    //   })
    // })

    // deletes = document.getElementsByClassName('delete');
    // Array.from(deletes).forEach((element) => {
    //   element.addEventListener("click", (e) => {
    //     console.log("edit ");
    //     sno = e.target.id.substr(1);

    //     if (confirm("Are you sure you want to delete this note!")) {
    //       console.log("yes");
    //       window.location = `/inote/index.php?delete=${sno}`;
    //       // TODO: Create a form and use post request to submit a form
    //     }
    //     else {
    //       console.log("no");
    //     }
    //   })
    // })
 
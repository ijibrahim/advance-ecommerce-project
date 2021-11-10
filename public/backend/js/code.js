$(function(){
    $(document).on('click','#delete',function(event){
        event.preventDefault();
        var link = $(this).attr("href");


            Swal.fire({
                      title: 'Are you sure?',
                      text: "Delete This Data?",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
            })


    });
});

// Confirm Order 

$(function(){
    $(document).on('click','#confirm',function(event){
        event.preventDefault();
        var link = $(this).attr("href");


            Swal.fire({
                      title: 'Are you sure to Confirm?',
                      text: "Once Confirm, You will not be able to panding again",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Confirm it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Confirm!',
                          'Confirm Changes.',
                          'success'
                        )
                      }
            })


    });
});

// Processing Order


$(function(){
    $(document).on('click','#processing',function(event){
        event.preventDefault();
        var link = $(this).attr("href");


            Swal.fire({
                      title: 'Are you sure to Process?',
                      text: "Once Process, You will not be able to panding again",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Process it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Process!',
                          'Process Changes.',
                          'success'
                        )
                      }
            })


    });
});

// Picked Order


$(function(){
    $(document).on('click','#picked',function(event){
        event.preventDefault();
        var link = $(this).attr("href");


            Swal.fire({
                      title: 'Are you sure to Picked?',
                      text: "Once Picked, You will not be able to panding again",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Picked it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Picked!',
                          'Picked Changes.',
                          'success'
                        )
                      }
            })


    });
});

// Shipped Order


$(function(){
    $(document).on('click','#shipped',function(event){
        event.preventDefault();
        var link = $(this).attr("href");


            Swal.fire({
                      title: 'Are you sure to Shipped?',
                      text: "Once Shipped, You will not be able to panding again",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Shipped it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Shipped!',
                          'Shipped Changes.',
                          'success'
                        )
                      }
            })


    });
});

// Delivered Order


$(function(){
    $(document).on('click','#delivered',function(event){
        event.preventDefault();
        var link = $(this).attr("href");


            Swal.fire({
                      title: 'Are you sure to Delivered?',
                      text: "Once Delivered, You will not be able to panding again",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Delivered it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Delivered!',
                          'Delivered Changes.',
                          'success'
                        )
                      }
            })


    });
});

// Cancel Order


$(function(){
    $(document).on('click','#cancel',function(event){
        event.preventDefault();
        var link = $(this).attr("href");


            Swal.fire({
                      title: 'Are you sure to Cancel?',
                      text: "Once Cancel, You will not be able to panding again",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, Cancel it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Cancel!',
                          'Cancel Changes.',
                          'success'
                        )
                      }
            })


    });
});















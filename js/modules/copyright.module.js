function ankit() {
  Swal.fire({
    position: 'top-end',
    icon: 'info',
    toast: true,
    title: 'Ankit Saikia',
    html: '<p class="lead">Click the footer link to redirect to Portfolio</p>',
    width: '40%',
    timer: 1500,
    showConfirmButton: false,
    showClass: {
      popup: 'animated fadeInDown',
      icon: 'swal2-icon-show'
    },
    hideClass: {
      popup: 'animated fadeOutUp',
      icon: 'swal2-icon-hide'
    }
  })
}

function arjun() {
  Swal.fire({
    position: 'top-end',
    toast: true,
    icon: 'info',
    title: 'Arjun Sharma',
    html: '<p class="lead">Testing part is done by Arjun </p>',
    showConfirmButton: false,
    timer: 1500,
    width: '40%',
    showClass: {
      popup: 'animated fadeInDown',
      icon: 'swal2-icon-show'
    },

    hideClass: {
      popup: 'animated fadeOutUp',
      icon: 'swal2-icon-hide'
    }
  })
}

function dhiraj() {
  Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'info',
    title: 'Dhiraj Saikia',
    timer: 1500,
    width: '40%',
    showConfirmButton: false,
    showClass: {
      popup: 'animated fadeInDown',
      icon: 'swal2-icon-show'
    },
    hideClass: {
      popup: 'animated fadeOutUp',
      icon: 'swal2-icon-hide'
    }
  })
}

function bipon() {
  Swal.fire({
    position: 'top-end',
    icon: 'warning',
    toast: true,
    title: 'Bipon Dutta',
    timer: 1700,
    width: '40%',
    showConfirmButton: false,
    showClass: {
      popup: 'animated fadeInDown',
      icon: 'swal2-icon-show'
    },
    hideClass: {
      popup: 'animated fadeOutUp',
      icon: 'swal2-icon-hide'
    }
  })
}

// for developer button click query:
function devButton(){
  Swal.fire({
    title: 'Developers',
    html: `
    <h3 class="text-light">This site has been developed by -</h3>
    <div class="list-unstyled">
      <li class="text-light">Ankit Saikia</li>
      <li class="text-light">Arjun Sharma</li>
      <li class="text-light">Dhiraj Saikia</li>
      <li class="text-light">Bipon Dutta</li>
    </div>
    `,
    position: 'center',
    showConfirmButton: false,
    showCloseButton: true,
    color: '#fff',
    background: 'transparent',
    backdrop: `
    #000
    `,
   timer: 5000,
  })
}
@extends('layouts.dashboard.main')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}"
  rel="stylesheet" />
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
      <h4 class="mb-3 mb-md-0">Product</h4>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
      <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
          <i class="btn-icon-prepend" data-feather="list"></i>
          View Product
      </button>
  </div>
</div>
<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <h6 class="card-title">Add Product</h6>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">SKU</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Product Type</label>
              <select class="form-control">
                <option>Single</option>
                <option>Varient</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Feature Image</label>
              <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Short Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="ActivityStatus">Status</label>
              <select class="form-control">
                <option>Active</option>
                <option>Deactive</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Product Image</label>
              <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Long Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Category</label>
              <input name="tags" id="tags" value="Mobile" />
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Reguler Price</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Sale Price</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Stock</label>
              <input id="phone" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- row -->

<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <h6 class="card-title">Select Attributes</h6>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="form-group">
              <button id="button1" class="btn btn-outline-primary" onclick="toggleButtonStyle(this)">Color</button>
              <button id="button2" class="btn btn-outline-primary" onclick="toggleButtonStyle(this)">Size</button>
              <button id="button3" class="btn btn-outline-primary" onclick="toggleButtonStyle(this)">Country</button>
              <button id="button4" class="btn btn-outline-primary" onclick="toggleButtonStyle(this)">Gender</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-xl-12 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h6 class="card-title">Product Variations</h6>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary btn-icon-text mb-md-0" onclick="addRow()">
              <i class="btn-icon-prepend" data-feather="plus"></i>
              Add Varient
            </button>
          </div>
        </div>
        <div class="row" id="form-rows-container">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group text-right">
      <button type="submit" class="btn btn-success mr-2 mb-2 mb-md-0 text-white">Reset</button>
      <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Save</button>
    </div>
  </div>
</div>
<script>
  // Define a function to toggle the button styles
  function toggleButtonStyle(button) {
    button.classList.toggle("btn-outline-primary");
    button.classList.toggle("btn-primary");
    button.classList.toggle("text-light");
  }
  
  // Get a reference to the button row and add event listeners to the buttons
  const buttonRow = document.getElementById("button-row");
  buttonRow.addEventListener("click", function(event) {
    // Check if the clicked element is a button
    if (event.target.tagName === "BUTTON") {
      toggleButtonStyle(event.target);
    }
  });

  function addRow() {
  // Get a reference to the form rows container
  const formRowsContainer = document.getElementById("form-rows-container");

  // Create a new form row
  const newFormRow = document.createElement("div");
  newFormRow.classList.add("form-row", "mx-0", "mb-4");

  // Create and add the select inputs to the form row
  for (let i = 0; i < 3; i++) {
    const selectContainer = document.createElement("div");
    selectContainer.classList.add("col-md-2");

    const selectInput = document.createElement("select");
    selectInput.classList.add("form-select");
    const defaultOption = document.createElement("option");
    defaultOption.selected = true;
    defaultOption.text = "Select an option";
    selectInput.add(defaultOption);
    for (let j = 1; j <= 3; j++) {
      const option = document.createElement("option");
      option.text = `Option ${j}`;
      selectInput.add(option);
    }
    selectContainer.appendChild(selectInput);
    newFormRow.appendChild(selectContainer);
  }

  // Create and add the text inputs to the form row
  for (let i = 0; i < 3; i++) {
    const inputContainer = document.createElement("div");
    inputContainer.classList.add("col-md-2");

    const textInput = document.createElement("input");
    textInput.classList.add("form-control");
    textInput.type = "text";
    if (i==0){
    textInput.placeholder = `Reguler Price`;
    }
    else if (i==1){
    textInput.placeholder = `Sales Price`;
    }
    else if (i==2){
    textInput.placeholder = `Stock`;
    }
    inputContainer.appendChild(textInput);
    newFormRow.appendChild(inputContainer);
  }

  // Create and add the remove button to the form row
  const removeButtonContainer = document.createElement("div");
  removeButtonContainer.classList.add("col-md-12", "mt-1", "text-end");

  const removeButton = document.createElement("button");
  removeButton.classList.add("btn", "btn-danger");
  removeButton.textContent = "Remove this varient";
  removeButton.onclick = function () {
    removeRow(newFormRow);
  };

  removeButtonContainer.appendChild(removeButton);
  newFormRow.appendChild(removeButtonContainer);

  formRowsContainer.appendChild(newFormRow);
}

// Define a function to remove a form row
function removeRow(formRow) {
  formRow.remove();
}
</script>

@endsection
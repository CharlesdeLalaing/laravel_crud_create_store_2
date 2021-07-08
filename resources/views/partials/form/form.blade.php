<div class="container w-50 p-5">
    <form action="/home" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">nom de l'éleve:</label>
            <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Alix">
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlSelect1">Genre de l'éleve:</label>
            <select class="form-control" name="genre" id="exampleFormControlSelect1">
                <option>homme</option>
                <option>femme</option>
                <option>autre</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Email de l'éleve:</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Alix@green.com">
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlSelect2">Âge de l'éleve:</label>
            <input type="number" name="age" class="form-control" id="exampleFormControlInput2">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

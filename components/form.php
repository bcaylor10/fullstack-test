<?php if ($success) : ?>
    <div class="mb-5 alert alert-success show" role="alert">
        Form successfully submitted
    </div>
<?php endif; ?>

<h2>Connect with one of our experts to learn more!</h2>

<form action="/" method="POST">
    <div class="form-group mb-3">
        <label class='form-label' for="name">Name <span class='required'>*</span></label>
        <input 
            value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>"
            type="text" 
            class="form-control <?= in_array('name', $errors) ? 'border-danger' : ''; ?>" 
            name="name" 
            id='name' 
            required
        >
        <?php if (in_array('name', $errors)) : ?>
            <p class='text-danger'>Name is required</p>
        <?php endif; ?>
    </div> <!-- form-group mb-3 -->

    <div class="form-group mb-3">
        <label class='form-label' for="email">Email <span class='required'>*</span></label>
        <input 
            value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"
            type="email" 
            class="form-control <?= in_array('email', $errors) ? 'border-danger' : ''; ?>" 
            name="email" 
            id='email'
            required 
        >
        <?php if (in_array('email', $errors)) : ?>
            <p class='text-danger'>Email is required</p>
        <?php endif; ?>
    </div> <!-- form-group mb-3 -->
    
    <div class="form-group mb-3">
        <label class='form-label' for="phone">Phone Number <span class='required'>*</span></label>
        <input 
            value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>"
            type="tel" 
            class="form-control <?= in_array('phone', $errors) ? 'border-danger' : ''; ?>" 
            name="phone"
            id='phone'
        >
        <?php if (in_array('phone', $errors)) : ?>
            <p class='text-danger'>Phone is required</p>
        <?php endif; ?>
    </div> <!-- form-group mb-3 -->

    <div class="form-group mb-3">
        <label class='form-label' for="industry">Industry <span class='required'>*</span></label>
        <input 
            value="<?= isset($_POST['industry']) ? $_POST['industry'] : '' ?>"
            type="text" 
            class="form-control <?= in_array('industry', $errors) ? 'border-danger' : ''; ?>" 
            name="industry" 
            id='industry'
        >
        <?php if (in_array('industry', $errors)) : ?>
            <p class='text-danger'>Industry is required</p>
        <?php endif; ?>
    </div> <!-- form-group mb-3 -->

    <button type="submit" class='d-block mt-4 btn btn-primary'>Send Away!</button>
</form>
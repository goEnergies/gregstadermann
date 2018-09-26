<template>
<div class="form-group row">
    <div class="col-md-8">
        <input type="text" class="form-control" id="name" name="name"
            v-model="newItem.name" placeholder=" Enter some name" required>
        <p class="error text-center alert alert-danger hidden"></p>
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary" @click.prevent="createItem()"
            id="name" name="name">
            <span class="glyphicon glyphicon-plus"></span> ADD
        </button>
    </div>
</div>
</template>

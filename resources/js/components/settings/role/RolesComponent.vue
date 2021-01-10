<template>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <app-page-title :title="title"/>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center flex-wrap text-nowrap float-md-right">

                                <div class="btn-group">
                                    <app-dropdown>
                                        <app-icon :icon-class="'btn-icon-append'" name="chevron-down"/>
                                    </app-dropdown>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item btn-icon-text" href="" @click.prevent="openModal()">
                                            <app-icon name="plus"/>
                                            Add New
                                        </a>

                                        <a class="dropdown-item btn-icon-text" href="#">
                                            <app-icon name="upload"/> Import
                                        </a>

                                        <a class="dropdown-item btn-icon-text" href="#">
                                            <app-icon name="download"/> Export
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Progress
                                </th>
                                <th>
                                    Salary
                                </th>
                                <th>
                                    Start date
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Cedric Kelly
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                             role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $206,850
                                </td>
                                <td>
                                    June 21, 2010
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    Haley Kennedy
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                             role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $313,500
                                </td>
                                <td>
                                    May 15, 2013
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    Bradley Greer
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                             role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $132,000
                                </td>
                                <td>
                                    Apr 12, 2014
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4
                                </td>
                                <td>
                                    Brenden Wagner
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                             role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $206,850
                                </td>
                                <td>
                                    June 21, 2010
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5
                                </td>
                                <td>
                                    Bruno Nash
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                             role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $163,500
                                </td>
                                <td>
                                    January 01, 2016
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6
                                </td>
                                <td>
                                    Sonya Frost
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                             role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $103,600
                                </td>
                                <td>
                                    July 18, 2011
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    7
                                </td>
                                <td>
                                    Zenaida Frank
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                             role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    $313,500
                                </td>
                                <td>
                                    March 22, 2013
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <create-edit-roles-component></create-edit-roles-component>


    </div>

</template>

<script>
export default {

    name: "RolesComponent",
    data(){

        return {

        }

    },
    props:{
        title:{
            type:String,
            default: "Roles"
        },
    },
    methods:{
        openModal(){
            $('#createAndUpdateModal').modal('show');
        }
    }

}
</script>

<style scoped>

</style>

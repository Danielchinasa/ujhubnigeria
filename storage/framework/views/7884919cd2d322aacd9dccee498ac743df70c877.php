<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Members Dashboard  | Welcome <strong> <?php echo e(Auth::user()->name); ?></strong></div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- Start of contents -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Application Form For SIWES</strong></h3>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item" data-toggle="modal" data-target="#exampleModalScrollable">Fill Up A Form Now</a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><strong>Application Form For SIWES</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                <!-- Start modal grid -->
                                                <div class="row">
                                                <!-- Start Colume One -->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Full Name</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Matriculation Number</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mat. number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Department</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mat. number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Duration</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mat. number">
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="exampleInputEmail1">Gender</label>
                                                            <select class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect">
                                                                <option selected>Choose...</option>
                                                                <option value="male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-check-lg">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Areas of Intrest
                                                            </label>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" style="width:15px; height:15px">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    Research
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" style="width:15px; height:15px">
                                                                <label class="form-check-label" for="defaultCheck2">
                                                                    Data Analytics
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" style="width:15px; height:15px">
                                                                <label class="form-check-label" for="defaultCheck3">
                                                                    Web Development
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" style="width:15px; height:15px">
                                                                <label class="form-check-label" for="defaultCheck4">
                                                                    Mobile App. Development
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5" style="width:15px; height:15px">
                                                                <label class="form-check-label" for="defaultCheck5">
                                                                    Computer Graphics
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6" style="width:15px; height:15px">
                                                                <label class="form-check-label" for="defaultCheck6">
                                                                    DataBase Design
                                                                </label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- End Colume one -->

                                                <!-- Start of Colume two -->
                                                    <div class="col-md-8 ml-auto">
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">Institution</label>
                                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of your Institution">   
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">Program</label>
                                                                <select name="program" id="" class="form-control">
                                                                <option value="">- SELECT PROGRAM -</option>
                                                                <option value="SIWES">SIWES</option>
                                                                <option value="others">OTHERS</option>
                                                               </select>
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">If others (above) Specify</label>
                                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                                        </div>
                                                        <div class="form-check-lg">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                What language are you already familier with?
                                                            </label>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="PYTHON" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="PYTHON">
                                                                        PYTHON
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="JAVA" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="JAVA">
                                                                        JAVA
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="C++" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="C++">
                                                                        C++
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="VISUAL BASIC" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="VISUAL BASIC">
                                                                        VISUAL BASIC
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="DART" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="DART">
                                                                        DART (Flutter)
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="ANGULAR" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="ANGULAR">
                                                                        ANGULAR
                                                                    </label>
                                                                </div>
                                                                </div>
                                                                <!-- Second Grid -->
                                                                <div class="col-md-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="REACT" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="REACT">
                                                                        REACT
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="REACT NATIVE" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="REACT NATIVE">
                                                                        REACT NATIVE
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                        
                                                                    <input class="form-check-input" type="checkbox" value="" id="JAVASCRIPT" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="JAVASCRIPT">
                                                                        JAVASCRIPT
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="TYPESCRIPT" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="TYPESCRIPT">
                                                                        TYPESCRIPT (Ionic)
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="PHP" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="PHP">
                                                                        PHP
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="C#" style="width:15px; height:15px">
                                                                    <label class="form-check-label" for="C#">
                                                                        C#
                                                                    </label>
                                                                </div>
                                                                </div>   
                                                                <!-- End of Second Grid -->
                                                                
                                                                </div>

                                                                
                                                            </div>
                                                            
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Tell us abput yourself (not less than 400 words)</label>
                                                                <textarea class="form-control" aria-label="With textarea" rows="5"></textarea>
                                                            </div>
                                                    </div>
                                                <!-- End of Colume Two -->
                                                </div>
                                                <!-- End modal grid -->
                                                
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone No:</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter contact number">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                                <label for="exampleInputEmail1">Address</label>
                                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                        <input type="checkbox"> By clicking on the Submit button, you agree to our terms and conditons
                                                        </label>
                                                    </div>
                                                    </div>
                                                </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Register For A Program</strong></h3>
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">Sign Up Now</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Panel title</h3>
                                    </div>
                                    <div class="panel-body">
                                        Panel content
                                    </div>
                            </div>
                        </div>
                    </div>

                        
                    <!-- End of contents -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
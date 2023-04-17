<?php

use yii\helpers\Url;
?>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= Url::to(['site/index']) ?>">
          <i class="bi bi-speedometer2"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid-3x3-gap"></i><span>Branch</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['branchs/adddep']) ?>">
              <i class="bi bi-circle"></i><span>Add Branch</span>
            </a>
          </li>
        
                </ul>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['branchs/depman']) ?>">
              <i class="bi bi-circle"></i><span>Manage Branch</span>
            </a>
          </li>
        
                </ul>
      </li><!-- End Components Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-square"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['userrs/addusr']) ?>">
              <i class="bi bi-circle"></i><span>Add User</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['userrs/usrman']) ?>">
              <i class="bi bi-circle"></i><span>Manage User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Change Profile</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-box-arrow-right"></i><span>Sign Out</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Icons Nav -->

    </ul>

  </aside>
  
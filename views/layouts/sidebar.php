<?php

use yii\helpers\Url;
?>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-speedometer2"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid-3x3-gap"></i><span>Department</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['departments/adddep']) ?>">
              <i class="bi bi-circle"></i><span>Add Department</span>
            </a>
          </li>
        
                </ul>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['departments/depman']) ?>">
              <i class="bi bi-circle"></i><span>Manage Department</span>
            </a>
          </li>
        
                </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-code"></i><span>Leave Type</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['leaves/leave']) ?>">
              <i class="bi bi-circle"></i><span>Add LeaveType</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['leaves/manleave']) ?>">
              <i class="bi bi-circle"></i><span>Manage LeaveType</span>
            </a>
          </li>
                  </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-square"></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['employees/addemp']) ?>">
              <i class="bi bi-circle"></i><span>Add Employee</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['employees/empman']) ?>">
              <i class="bi bi-circle"></i><span>Manage Employee</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-tv"></i><span>Leave Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['livvs/allliv']) ?>">
              <i class="bi bi-circle"></i><span>All Leave</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['livvs/allliv3']) ?>">
              <i class="bi bi-circle"></i><span>Pending Leave</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['livvs/approvedliv']) ?>">
              <i class="bi bi-circle"></i><span>Approved Leave</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['livvs/rejectliv']) ?>">
              <i class="bi bi-circle"></i><span>Not Approved Leave</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

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
  
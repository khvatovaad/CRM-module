<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/">
                  <span data-feather="home"></span>
                  CRM <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/clients">
                  <span data-feather="file"></span>
                  Клиенты
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tasks">
                  <span data-feather="shopping-cart"></span>
                  Задачи
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/deals">
                  <span data-feather="users"></span>
                  Сделки
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Документы
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Показатели
                </a>
              </li>
            </ul>
            @include('layouts/menu_client')
           
            <!-- <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="/lids">
                  <span data-feather="file-text"></span>
                  Лиды
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/clients/new">
                  <span data-feather="file-text"></span>
                  Добавленные сегодня
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/forgotten">
                  <span data-feather="file-text"></span>
                  Забытые
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/archive">
                  <span data-feather="file-text"></span>
                  Архив
                </a>
              </li>
            </ul> -->
            <!-- <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="/lids">
                  <span data-feather="file-text"></span>
                  Забытые
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/clients/new">
                  <span data-feather="file-text"></span>
                  Избранные
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/forgotten">
                  <span data-feather="file-text"></span>
                  Открытые
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/archive">
                  <span data-feather="file-text"></span>
                  Оплаченные
                </a>
              </li>
            </ul> -->
          </div>
        </nav>
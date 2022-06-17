@extends('layouts.user.app')

@section('content')
  <main id="main">
    <!-- hero -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>{{ $user->name }}</h1>
            <h3 class="text-light">{{ $user->detail->role->role }}</h3>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ $user->image }}" class="img-fluid animated" alt=""  >
          </div>
        </div>
      </div>

    </section>

    <!-- User detail -->
    <section id="UserDetail" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Detail</h2>
          <h4>Detail data diri</h4>
        </div>
        <table class="table">
          <tbody>
              <tr>
                <th scope="row">Tempat/Tgl Lahir</th><td>{{$user->detail->birthplace}}, {{$user->detail->birtdate}}</td>
              </tr>
              <tr>
                <th scope="row">Alamat</th><td>{{$user->detail->address}}</td>
              </tr>
              <tr>
                <th scope="row">Email</th><td>{{$user->email}}</td>
              </tr>
              <tr>
                <th scope="row">Agama</th><td>{{$user->detail->religion}}</td>
              </tr>
              <tr>
                <th scope="row">Prodi</th><td>{{$user->detail->study_program}}</td>
              </tr>
              <tr>
                <th scope="row">Fakultas</th><td>{{$user->detail->faculity}}</td>
              </tr>
              <tr>
                <th scope="row">Tahun Angkatan</th><td>{{$user->detail->generation}}</td>
              </tr>
              <tr>
                <th scope="row">No Telp</th><td>{{ $user->contact->phone }}</td>
              </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- User activity -->
    <section id="UserActivity" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Acitvity</h2>
          <h5>Detail Aktivitas</h5>
        </div>
        
        <div class="accordion" id="accordionExample">
          @foreach($user->activities as $activity)
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  {{ $activity->activity }}
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table mb-3">
                    <tbody>
                      <tr>
                        <th scope="row">Held At</th>
                        <td>{{$activity->held_at}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Role</th>
                        <td>{{$activity->role}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Description</th>
                        <td>{{$activity->description}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- User education -->
    <section id="UserEducation" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Education</h2>
          <h4>Rekam Jejak Pendidikan</h4>
        </div>
        
        <div class="card">
          <ul class="list-group list-group-flush">
            @foreach($user->educations as $education)
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  <div class="institution">{{ $education->level . ' ' . $education->institution }}</div>
                  <div class="timeline">{{ date('Y', strtotime($education->start_at)) . ' - ' . date('Y', strtotime($education->end_at)) }}</div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

      </div>
    </section>

    <!-- User experience -->
    <section id="UserExperience" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Experience</h2>
          <h4>Pengalaman Kerja</h4>
        </div>
        
        <div class="card">
          <ul class="list-group list-group-flush">
            @foreach($user->experiences as $experience)
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  <div class="institution">{{ $experience->role . ' di ' . $experience->institution }}</div>
                  <div class="timeline">{{ date('Y', strtotime($experience->start_at)) . ' - ' . date('Y', strtotime($experience->end_at)) }}</div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

      </div>
    </section>

    <!-- User organization -->
    <section id="UserOrganization" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Organization</h2>
          <h4>Pengalaman Organisasi</h4>
        </div>
        
        <div class="card">
          <ul class="list-group list-group-flush">
            @foreach($user->organizations as $organization)
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  <div class="institution">{{ $organization->role . ' di ' . $organization->institution }}</div>
                  <div class="timeline">{{ date('Y', strtotime($organization->start_at)) . ' - ' . date('Y', strtotime($organization->end_at)) }}</div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

      </div>
    </section>

    <!-- User movement -->
    <section id="UserMovement" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Movement</h2>
          <h4>Kontribusi Suatu Gerakan</h4>
        </div>
        
        <div class="card">
          <ul class="list-group list-group-flush">
            @foreach($user->movements as $movement)
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  <div class="institution">{{ $movement->movement }}</div>
                  <div class="timeline">{{ date('Y', strtotime($movement->held_at)) }}</div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

      </div>
    </section>

    <!-- User movement -->
    <section id="UserMovement" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Achievement</h2>
          <h4>Capaian Prestasi Mahasiswa</h4>
        </div>
        
        <div class="card">
          <ul class="list-group list-group-flush">
            @foreach($user->achievements as $achievement)
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  <div class="institution">{{ $achievement->achievement }}</div>
                  <div class="timeline">{{ date('Y', strtotime($achievement->achieved_at)) }}</div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

      </div>
    </section>
@endsection
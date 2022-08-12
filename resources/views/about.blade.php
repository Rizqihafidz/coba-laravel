@extends('layouts.main')

@section('container')
    <h1 class="text-center">{{ $name }}</h1>
    <div class="row mb-4 mt-5">
        <h3 class="text-center border-3 border-bottom border-top border-danger">Sejarah Desa</h3>
    </div>

    <div class="clearfix">
        <img src="{{ $img }}" style="width: 500px; height:300px;" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
      <article class="my-3 fs-5">
        <p>
            A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
          </p>
        
          <p>
            As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
          </p>
        
          <p>
            And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
          </p>
      </article>
    </div>

    <div class="row mb-4 mt-5">
        <h3 class="text-center border-3 border-bottom border-top border-danger">Profil Desa</h3>
    </div>

    {{-- <div class="row mb-3 justify-content-center">
        <img src="{{ $img }}" class="img-fluid mb-3" style="width: 500px; height:300px;" alt="{{ $name }}">
    </div> --}}

    {{-- <div class="row">
        <article class="my-3 fs-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste obcaecati vero est magni possimus repellat, voluptatum dolore veniam nobis repellendus praesentium officia vitae ipsa natus autem dolores esse. Ab, totam aperiam dicta molestias earum adipisci odit modi officia natus necessitatibus neque dolor debitis, vero rerum eveniet beatae deleniti quae tenetur.</p>
        </article>
    </div> --}}

    <div class ="row mb-5">
        <div class="col-md-6">
            <iframe style="width: 100%; height: 500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63158.678431994456!2d112.5496853674484!3d-8.360534960433514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a8452fb7b913%3A0x5caba3d8020a1ccc!2sTumpakrejo%2C%20Gedangan%2C%20Malang%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1659447863502!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6">
            <article class="my-3 fs-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste obcaecati vero est magni possimus repellat, voluptatum dolore veniam nobis repellendus praesentium officia vitae ipsa natus autem dolores esse. Ab, totam aperiam dicta molestias earum adipisci odit modi officia natus necessitatibus neque dolor debitis, vero rerum eveniet beatae deleniti quae tenetur.</p>
            </article>
        </div>
    </div>
    
@endsection
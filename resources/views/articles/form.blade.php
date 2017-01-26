<!--- Title Field --->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!--- Intro Field --->
<div class="form-group">
    {!! Form::label('intro', 'Intro:') !!}
    {!! Form::text('intro', null, ['class' => 'form-control']) !!}
</div>

<!--- Published_at Field --->
<div class="form-group">
    {!! Form::label('published_at', 'Published_at:') !!}
    {!! Form::input('date','published_at', date("Y-m-d"), ['class' => 'form-control']) !!}
</div>

<!--- Content Field --->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
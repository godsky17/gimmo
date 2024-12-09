<x-mail::message>
# Introduction

Le bien <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property'=> $property]) }}">{{ $property->title }}</a> viens de faire l'objet d'une proposition.

## Demandeur
- Prenom : {{ $data['firstName']}}
- Nom : {{ $data['lastName']}}
- Telephone : {{ $data['phone']}}
- Email : {{ $data['email']}}

## Message :
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

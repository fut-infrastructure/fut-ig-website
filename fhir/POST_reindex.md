# POST Reindex - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* **POST Reindex**

## POST Reindex

`POST [base]/$reindex`

**Header**

```
Accept-Charset: utf-8
Authorization: Bearer eyJhbGciOiJub25lIn0.eyJ1c2VyX2lkIjoiMTJiYmUyYjYtM2U4Yy00MDdlLWI1MWYtNWZiNGM3Y2E3YzIwIiwicmVhbG1fYWNjZXNzIjp7InJvbGVzIjpbIiR0ZXN0LW9ubHktY3JlYXRlIiwiJHJlaW5kZXgiXX0sInVzZXJfdHlwZSI6IlNZU1RFTSJ9.
Accept: application/fhir+json;q=1.0, application/json+fhir;q=0.9
User-Agent: HAPI-FHIR/6.10.5 (FHIR Client; FHIR 4.0.1/R4; apache)
Accept-Encoding: gzip
Content-Type: application/fhir+json; charset=UTF-8

```

**Body**:

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "url",
      "valueString": "Organization?"
    }
  ]
}

```

**Response**

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "jobId",
      "valueString": "403df237-d1d1-42f5-a8ed-953c83ed9db0"
    }
  ]
}

```


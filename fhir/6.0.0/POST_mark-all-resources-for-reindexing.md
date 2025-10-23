# POST Mark All Resources for Reindexing - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* **POST Mark All Resources for Reindexing**

## POST Mark All Resources for Reindexing

`POST [base]/$mark-all-resources-for-reindexing`

**Header**

```
Accept-Charset: utf-8
Authorization: Bearer eyJhbGciOiJub25lIn0.eyJ1c2VyX2lkIjoiMDM0ZDVkODktZDE1Yy00ZWE3LWI3ZDUtY2QyOGQwNTE0ZjBiIiwicmVhbG1fYWNjZXNzIjp7InJvbGVzIjpbIiR0ZXN0LW9ubHktY3JlYXRlIiwiJHJlaW5kZXgiXX0sInVzZXJfdHlwZSI6IlNZU1RFTSJ9.
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
      "name": "reindexAll",
      "valueBoolean": false
    },
    {
      "name": "resourceTypes",
      "valueString": "Organization"
    },
    {
      "name": "resourceTypes",
      "valueString": "CareTeam"
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
      "name": "status",
      "valueString": "Marked resources"
    }
  ]
}

```


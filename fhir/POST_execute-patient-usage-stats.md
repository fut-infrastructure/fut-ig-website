# POST Execute Patient Usage Stats - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* **POST Execute Patient Usage Stats**

## POST Execute Patient Usage Stats

`POST [base]/$execute-patient-usage-stats`

**Header**

```
Accept-Charset: utf-8
Authorization: Bearer eyJhbGciOiJub25lIn0.eyJ1c2VyX2lkIjoiYjQ0OTY4YjQtN2JjNy00YzMyLWI5ODAtMjkwMWJmNTU1MTJjIiwicmVhbG1fYWNjZXNzIjp7InJvbGVzIjpbInJlcG9ydC1ub24tYW5vbnltaXplZCIsIiRmZXRjaC1wYXRpZW50LXVzYWdlLXN0YXRzIiwiQmluYXJ5LnJlYWQiXX0sInVzZXJfdHlwZSI6IlBSQUNUSVRJT05FUiJ9.
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
      "name": "anonymization",
      "valueString": "None"
    }
  ]
}

```

**Response**

```
{
  "resourceType": "Binary",
  "id": "4",
  "meta": {
    "versionId": "1",
    "lastUpdated": "2025-02-04T14:14:44.580+00:00",
    "source": "#d2f0b304-529c-4921-9857-7c3841613adf",
    "profile": [
      "http://hl7.org/fhir/StructureDefinition/Binary"
    ]
  },
  "contentType": "text/plain",
  "securityContext": {
    "identifier": {
      "value": "b44968b4-7bc7-4c32-b980-2901bf55512c"
    }
  },
  "data": "Kk5PVCBHRU5FUkFURUQgWUVUKg=="
}

```


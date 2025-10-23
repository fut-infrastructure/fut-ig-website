# POST Schedule Practitioner Gdpr - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* **POST Schedule Practitioner Gdpr**

## POST Schedule Practitioner Gdpr

`POST [base]/$schedule-practitioner-gdpr`

**Header**

```
Accept-Charset: utf-8
Authorization: Bearer eyJhbGciOiJub25lIn0.eyJ1c2VyX2lkIjoiMjFiMTA1YWItMWFjZC00NmY4LTg1NzktZTZhZDVkY2Y5MTNiIiwicmVhbG1fYWNjZXNzIjp7InJvbGVzIjpbIiRmZXRjaC1wcmFjdGl0aW9uZXItZ2RwciIsInJlcG9ydC1ub24tYW5vbnltaXplZCIsIkJpbmFyeS5yZWFkIl19LCJjb250ZXh0Ijp7Im9yZ2FuaXphdGlvbl9pZCI6Imh0dHBzOi8vb3JnYW5pemF0aW9uLmNpdC1yZXBvcnRpbmctMTE4Mi5sb2NhbC9maGlyL09yZ2FuaXphdGlvbi85NDE2NCIsInRlYW1fb25fZW9jIjpmYWxzZX0sInVzZXJfdHlwZSI6IlBSQUNUSVRJT05FUiJ9.
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
    },
    {
      "name": "organization",
      "valueReference": {
        "reference": "https://organization.cit-reporting-1182.local/fhir/Organization/94164"
      }
    },
    {
      "name": "practitioner",
      "valueReference": {
        "reference": "https://patient.cit-reporting-1182.local/fhir/Patient/89458"
      }
    }
  ]
}

```

**Response**

```
{
  "resourceType": "Binary",
  "id": "2",
  "meta": {
    "versionId": "1",
    "lastUpdated": "2025-02-04T14:14:31.231+00:00",
    "source": "#ae4ade98-2e5b-4934-8d47-c46c21bdfbfb",
    "profile": [
      "http://hl7.org/fhir/StructureDefinition/Binary"
    ]
  },
  "contentType": "text/plain",
  "securityContext": {
    "identifier": {
      "value": "21b105ab-1acd-46f8-8579-e6ad5dcf913b"
    }
  },
  "data": "Kk5PVCBHRU5FUkFURUQgWUVUKg=="
}

```


# POST Episode Of Care Is Context Allowed - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* **POST Episode Of Care Is Context Allowed**

## POST Episode Of Care Is Context Allowed

`POST [base]/EpisodeOfCare/569/$is-context-allowed`

**Header**

```
Accept-Charset: utf-8
Authorization: Bearer eyJhbGciOiJub25lIn0.eyJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsiRXBpc29kZU9mQ2FyZSRpcy1jb250ZXh0LWFsbG93ZWQiLCIkdGVzdC1vbmx5LWNyZWF0ZSJdfSwidXNlcl90eXBlIjoiU1lTVEVNIn0.
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
      "name": "patient",
      "valueReference": {
        "reference": "https://patient.cit-careplan-3038.local/fhir/Patient/92621"
      }
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
      "name": "Patient",
      "valueReference": {
        "reference": "https://patient.cit-careplan-3038.local/fhir/Patient/92621"
      }
    }
  ]
}

```


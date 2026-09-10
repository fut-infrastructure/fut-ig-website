# POST Bundle Retrieve and Transform PHMR - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* **POST Bundle Retrieve and Transform PHMR**

## POST Bundle Retrieve and Transform PHMR

`POST [base]/Bundle/$retrieve-and-transform-PHMR`

**Request Headers**

```
Authorization: Bearer eyJhbGciOiJub25lIn0.eyJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsiJHRlc3Qtb25seS1jcmVhdGUiLCJCaW5hcnkkcmV0cmlldmUtZG9jdW1lbnQiXX0sImNvbnRleHQiOnsib3JnYW5pemF0aW9uX2lkIjoiaHR0cHM6Ly9vcmdhbml6YXRpb24uY2l0LWRvY3VtZW50LXF1ZXJ5LTkyMS5sb2NhbC9maGlyL09yZ2FuaXphdGlvbi84ODIwNCIsInBhdGllbnRfaWQiOiJodHRwczovL3BhdGllbnQuY2l0LWRvY3VtZW50LXF1ZXJ5LTkyMS5sb2NhbC9maGlyL1BhdGllbnQvODYxNzkiLCJ0ZWFtX29uX2VvYyI6ZmFsc2V9LCJ1c2VyX3R5cGUiOiJQUkFDVElUSU9ORVIifQ.
Accept: application/fhir+json;q=1.0, application/json+fhir;q=0.9
User-Agent: HAPI-FHIR/8.6.5 (FHIR Client; FHIR 4.0.1/R4; apache)
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
      "valueString": "XYZ_YYY_TTT"
    }
  ]
}

```

**Response Headers**

```
date: Thu, 16 Apr 2026 10:53:55 GMT
x-request-id: 3949c0e3-2f0f-498b-84da-02247df2e70c
server: istio-envoy
x-envoy-upstream-service-time: 279
expires: 0
x-frame-options: DENY
pragma: no-cache
x-content-type-options: nosniff
x-xss-protection: 0
x-b3-traceid: 19164e776358fe360aa9b9ff738228be
x-powered-by: HAPI FHIR 8.6.5 REST Server (FHIR Server; FHIR 4.0.1/R4)
content-location: https://document-query.cit-document-query-921.local/fhir/Bundle/123
content-type: application/fhir+json; charset=UTF-8
location: https://document-query.cit-document-query-921.local/fhir/Bundle/123
cache-control: no-cache, no-store, max-age=0, must-revalidate

```

**Response**

```
{
  "resourceType": "Bundle",
  "id": "123",
  "type": "collection"
}

```


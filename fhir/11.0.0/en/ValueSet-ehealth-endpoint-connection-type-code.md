# Endpoint Connection Type Code - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Endpoint Connection Type Code**

## ValueSet: Endpoint Connection Type Code 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/endpoint-connection-type-code | *Version*:11.0.0 |
| Active as of 2025-11-07 | *Computable Name*:EndpointConnectionTypeCode |

 
ValueSet of endpoint connection types. 

 **References** 

* [ehealth-endpoint](StructureDefinition-ehealth-endpoint.md)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (Unsupported Code System Version)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-endpoint-connection-type-code",
  "url" : "http://ehealth.sundhed.dk/vs/endpoint-connection-type-code",
  "version" : "11.0.0",
  "name" : "EndpointConnectionTypeCode",
  "title" : "Endpoint Connection Type Code",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-07T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "ValueSet of endpoint connection types.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
      "version" : "11.0.0",
      "concept" : [{
        "code" : "unsupported"
      }]
    }]
  }
}

```

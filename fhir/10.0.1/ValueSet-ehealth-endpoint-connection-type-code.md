# Endpoint Connection Type Code - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Endpoint Connection Type Code**

## ValueSet: Endpoint Connection Type Code 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/endpoint-connection-type-code | *Version*:10.0.1 |
| Active as of 2025-11-07 | *Computable Name*:EndpointConnectionTypeCode |

 
ValueSet of endpoint connection types. 

 **References** 

* [ehealth-endpoint](StructureDefinition-ehealth-endpoint.md)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (Unsupported Code System Version)

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-endpoint-connection-type-code",
  "url" : "http://ehealth.sundhed.dk/vs/endpoint-connection-type-code",
  "version" : "10.0.1",
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
      "version" : "10.0.1",
      "concept" : [{
        "code" : "unsupported"
      }]
    }]
  }
}

```

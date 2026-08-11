# ehealth-endpoint - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-endpoint**

## Resource Profile: ehealth-endpoint 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-endpoint | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:ehealth-endpoint |

**Usages:**

* Refer to this Profile: [ehealth-organization](StructureDefinition-ehealth-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-endpoint.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-endpoint.csv), [Excel](StructureDefinition-ehealth-endpoint.xlsx), [Schematron](StructureDefinition-ehealth-endpoint.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-endpoint",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-endpoint",
  "version" : "10.0.1",
  "name" : "ehealth-endpoint",
  "status" : "active",
  "date" : "2026-08-11T06:44:23+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Endpoint",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Endpoint",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Endpoint",
      "path" : "Endpoint"
    },
    {
      "id" : "Endpoint.connectionType",
      "path" : "Endpoint.connectionType",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/endpoint-connection-type-code"
      }
    },
    {
      "id" : "Endpoint.payloadType",
      "path" : "Endpoint.payloadType",
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/endpoint-payload-type-code"
      }
    }]
  }
}

```

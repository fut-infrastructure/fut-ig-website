# VMR URI - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **VMR URI**

## Extension: VMR URI 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-vmr-uri | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-vmr-uri |

Virtual Meeting Room URI that can be used in eg. webRTC clients. Is provided by the service, not the client, and may not be updated.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md) and [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Extension: [Appointment/group-videoappointment01](Appointment-group-videoappointment01.md) and [Appointment/videoappointment01](Appointment-videoappointment01.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-vmr-uri)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-vmr-uri.csv), [Excel](StructureDefinition-ehealth-vmr-uri.xlsx), [Schematron](StructureDefinition-ehealth-vmr-uri.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-vmr-uri",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-vmr-uri",
  "version" : "6.0.0",
  "name" : "ehealth-vmr-uri",
  "title" : "VMR URI",
  "status" : "active",
  "date" : "2025-10-23T10:25:37+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "Virtual Meeting Room URI that can be used in eg. webRTC clients. Is provided by the service, not the client, and may not be updated.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Element"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Video meeting URL",
        "definition" : "Virtual Meeting Room URI that can be used in eg. webRTC clients. Is provided by the service, not the client, and may not be updated."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-vmr-uri"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "uri"
          }
        ]
      }
    ]
  }
}

```

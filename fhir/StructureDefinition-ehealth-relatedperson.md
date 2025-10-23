# ehealth-relatedperson - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-relatedperson**

## Resource Profile: ehealth-relatedperson 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-relatedperson |

# Introduction

Information about a person that is involved in the care for a patient, but who is not the target of healthcare, nor has a formal responsibility in the care process.

**Usages:**

* Refer to this Profile: [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-careplan](StructureDefinition-ehealth-careplan.md), [ehealth-careteam](StructureDefinition-ehealth-careteam.md), [assessor-other](StructureDefinition-ehealth-clinicalimpression-assessor-other.md)...Show 21 more,[ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md),[ehealth-communication](StructureDefinition-ehealth-communication.md),[ehealth-composition](StructureDefinition-ehealth-composition.md),[ehealth-condition](StructureDefinition-ehealth-condition.md),[Suppliers](StructureDefinition-ehealth-device-suppliers.md),[ehealth-device](StructureDefinition-ehealth-device.md),[ehealth-deviceusestatement](StructureDefinition-ehealth-deviceusestatement.md),[ehealth-documentreference](StructureDefinition-ehealth-documentreference.md),[ehealth-goal](StructureDefinition-ehealth-goal.md),[ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md),[ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md),[ehealth-media](StructureDefinition-ehealth-media.md),[ehealth-message](StructureDefinition-ehealth-message.md),[ehealth-observation](StructureDefinition-ehealth-observation.md),[ehealth-provenance](StructureDefinition-ehealth-provenance.md),[ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md),[ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md),[Task responsible](StructureDefinition-ehealth-task-responsible.md),[ehealth-task](StructureDefinition-ehealth-task.md),[ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md)and[ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Profile: [RelatedPerson/relatedperson01](RelatedPerson-relatedperson01.md)
* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-relatedperson)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-relatedperson.csv), [Excel](StructureDefinition-ehealth-relatedperson.xlsx), [Schematron](StructureDefinition-ehealth-relatedperson.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-relatedperson",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
  "version" : "6.0.0",
  "name" : "ehealth-relatedperson",
  "status" : "active",
  "date" : "2025-10-23T10:34:08+00:00",
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
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "RelatedPerson",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "RelatedPerson",
        "path" : "RelatedPerson"
      },
      {
        "id" : "RelatedPerson.extension",
        "path" : "RelatedPerson.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "RelatedPerson.extension:contactNote",
        "path" : "RelatedPerson.extension",
        "sliceName" : "contactNote",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient-contactnote"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.identifier",
        "path" : "RelatedPerson.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "RelatedPerson.identifier:ehealth-dk-crn-identifier",
        "path" : "RelatedPerson.identifier",
        "sliceName" : "ehealth-dk-crn-identifier",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-cpr-identifier"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.patient",
        "path" : "RelatedPerson.patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"
            ],
            "aggregation" : ["referenced"]
          }
        ]
      },
      {
        "id" : "RelatedPerson.relationship.coding",
        "path" : "RelatedPerson.relationship.coding",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/relatedperson-relationshiptype"
        }
      },
      {
        "id" : "RelatedPerson.name",
        "path" : "RelatedPerson.name",
        "min" : 1
      }
    ]
  }
}

```

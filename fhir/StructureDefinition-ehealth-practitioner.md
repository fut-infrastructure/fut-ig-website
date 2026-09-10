# ehealth-practitioner - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-practitioner**

## Resource Profile: ehealth-practitioner 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-practitioner |

# Introduction

A person who is directly or indirectly involved in the provisioning of healthcare.

Practitioner covers all individuals who are engaged in the healthcare process and healthcare-related services as part of their formal responsibilities and this resource is used for attribution of activities and responsibilities to these individuals.

# Scope and Usage

### Creation

The create operation on Practitioner is for internal use only and will be protected by privileges.

### Qualifications and Competencies

The `qualification` element holds the qualifications and competences of a practitioner, such as authorization identifier, education, and decentrally administered competences. Each qualification carries a code identifying the qualification, the issuing organization, and the registration period.

These values are maintained solely by the eHealth Infrastructure: they are synchronized from the security ticket each time the practitioner logs in, and direct updates to `qualification` through the FHIR API are rejected. Solutions can read the qualifications — for example to differentiate access to functionality based on competences — but cannot modify them.

Note that synchronization of decentralized competences only happen at login. The recorded qualifications reflect the practitioner's competences as of their most recent login, not a real-time view. Other qualifications such as authorization identifiers are synchronized once a day as part of nightly import jobs against national registries.

#### Decentralized competences

Decentrally administered competences (e.g. supplementary courses or diploma educations) are received as OIO-BPP privileges from the municipal or regional identity provider during login and stored as their eHealth competence code equivalent (see [Practitioner Competences](CodeSystem-ehealth-practitioner-competences.md) and the mapping in [OIO-BPP competences to eHealth Practitioner competences](ConceptMap-oio-bpp-competences-to-practitioner-competences.md)). These qualifications are identified by having an identifier with the system `http://ehealth.sundhed.dk/fhir/system/decentralized-competence`.

A decentralized competence is only valid within the context of the organization which issued it, recorded in `qualification.issuer`. The same competence may therefore appear more than once with different issuers, e.g. when granted independently by two municipalities.

At each login, the practitioner's decentralized competences from the login organization are updated. A previously registered competence which is no longer received during login is not removed; instead its `qualification.period.end` is set. Consumers must therefore inspect `qualification.period` to distinguish active competences from expired ones.

Only competences known by the eHealth Infrastructure are stored in the Practitioner resource. Receiving an unknown competence privilege does not cause the login to fail, and the unknown privilege is not stored in the Practitioner resource. Unknown privileges are instead exposed through an API in the authentication service (Keycloak) for troubleshooting purposes.

The eHealth Infrastructure does not validate combinations of competences (for instance, that a supplementary course may only be held by certain professions). Enforcement of such business rules is the responsibility of the consuming solutions.

Municipalities and Regions can request new competences to be added to the eHealth Infrastructure by sending in a request (see [Requesting new competences](https://ehealth-dk.atlassian.net/wiki/spaces/EDTW/pages/4696309765/Decentralized+Competences)).

**Usages:**

* Refer to this Profile: [ehealth-access-consent](StructureDefinition-ehealth-access-consent.md), [ehealth-access-provenance](StructureDefinition-ehealth-access-provenance.md), [ehealth-appointment](StructureDefinition-ehealth-appointment.md), [ehealth-careplan](StructureDefinition-ehealth-careplan.md)... Show 25 more, [ehealth-careteam](StructureDefinition-ehealth-careteam.md), [ehealth-clinicalimpression](StructureDefinition-ehealth-clinicalimpression.md), [ehealth-communication](StructureDefinition-ehealth-communication.md), [ehealth-composition](StructureDefinition-ehealth-composition.md), [ehealth-condition](StructureDefinition-ehealth-condition.md), [Suppliers](StructureDefinition-ehealth-device-suppliers.md), [ehealth-device](StructureDefinition-ehealth-device.md), [ehealth-deviceusestatement](StructureDefinition-ehealth-deviceusestatement.md), [ehealth-documentreference](StructureDefinition-ehealth-documentreference.md), [ehealth-goal](StructureDefinition-ehealth-goal.md), [ehealth-group-appointment](StructureDefinition-ehealth-group-appointment.md), [ehealth-group-videoappointment](StructureDefinition-ehealth-group-videoappointment.md), [ehealth-media](StructureDefinition-ehealth-media.md), [ehealth-message](StructureDefinition-ehealth-message.md), [ehealth-observation](StructureDefinition-ehealth-observation.md), [Performer](StructureDefinition-ehealth-performer.md), [ehealth-practitionerrole](StructureDefinition-ehealth-practitionerrole.md), [ehealth-provenance](StructureDefinition-ehealth-provenance.md), [ehealth-questionnaireresponse](StructureDefinition-ehealth-questionnaireresponse.md), [Responsible](StructureDefinition-ehealth-responsible.md), [ehealth-servicerequest](StructureDefinition-ehealth-servicerequest.md), [Task responsible](StructureDefinition-ehealth-task-responsible.md), [ehealth-task](StructureDefinition-ehealth-task.md), [ehealth-transformation-documentreference](StructureDefinition-ehealth-transformation-documentreference.md) and [ehealth-videoappointment](StructureDefinition-ehealth-videoappointment.md)
* Examples for this Profile: [Practitioner/107302](Practitioner-107302.md), [Practitioner/123](Practitioner-123.md) and [Practitioner/42](Practitioner-42.md)
* CapabilityStatements using this Profile: [organization](CapabilityStatement-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-practitioner.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-practitioner.csv), [Excel](StructureDefinition-ehealth-practitioner.xlsx), [Schematron](StructureDefinition-ehealth-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-practitioner",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
  "version" : "10.0.2",
  "name" : "ehealth-practitioner",
  "status" : "active",
  "date" : "2026-09-10T10:12:06+00:00",
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Practitioner",
      "path" : "Practitioner"
    },
    {
      "id" : "Practitioner.extension",
      "path" : "Practitioner.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Practitioner.extension:providerAffiliation",
      "path" : "Practitioner.extension",
      "sliceName" : "providerAffiliation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-provider-affiliation"]
      }]
    },
    {
      "id" : "Practitioner.name",
      "path" : "Practitioner.name",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Practitioner.qualification",
      "path" : "Practitioner.qualification"
    },
    {
      "id" : "Practitioner.qualification.issuer",
      "path" : "Practitioner.qualification.issuer",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"],
        "aggregation" : ["referenced"]
      }]
    },
    {
      "id" : "Practitioner.qualification:decentralizedCompetence",
      "path" : "Practitioner.qualification",
      "sliceName" : "decentralizedCompetence",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Practitioner.qualification:decentralizedCompetence.identifier.system",
      "path" : "Practitioner.qualification.identifier.system",
      "min" : 1,
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/system/decentralized-competence"
    },
    {
      "id" : "Practitioner.qualification:decentralizedCompetence.code",
      "path" : "Practitioner.qualification.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/practitioner-competences"
      }
    }]
  }
}

```

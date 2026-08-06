# ehealth-access-consent - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-access-consent**

## Resource Profile: ehealth-access-consent 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-access-consent | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-access-consent |

# Introduction

An "Access Consent" resource is a record of a Practitioners choice to allow Patients without MitID to login to the FUT platform.

# Scope and Usage

In the eHealth infrastructure an Access Consent resource is used

1. as a record of the fact that a Practitioner has given consent for a Patient without MitID to access his/her data in the FUT platform, and
1. to enforce data policies that require Consent to be given and recorded for a Patient.

## Registration of Consent

When a Practitioner gives a Patient access consent, this consent must be recorded as an Access Consent resource. This resource can be created by the Practitioner as a result of conversations or correspondence with the Patient.

eHealth operates with one specific category of access consent:

1. Category**INFA**: Consent given by a Practitioner to a Patient without MitID to access his/her data in the FUT platform.

Consents of category **INFA** are expressed by creating a Consent resource with:

* `Consent.category.coding.system = "http://terminology.hl7.org/CodeSystem/v3-ActCode"`
* `Consent.category.coding.code = "INFA"`.

## Enforcement of Consent

Business rules are built into eHealth infrastructure to ensure that patients without Access Consent cannot use assisted login to log into the FUT platform.

In addition to the `Consent.category` element, the following elements must be set on a Consent resource for the policy enforcing business logic to take effect:

* `Consent.patient` - the patient who is the subject of this consent
* `Consent.performer` - the practitioner providing the access consent
* `Consent.scope` - "patient-privacy" (system http://terminology.hl7.org/CodeSystem/consentscope)
* `Consent.provision.type` - "permit"
* `Consent.status` - the status of this consent (only active consents are considered to be in force)

For more information see the element descriptions in the [snapshot table](#tabs) on this page and also see the example Consent resources on the [Examples tab](StructureDefinition-ehealth-consent-examples.md).

## Read/Search

* Role AccessConsent.read/write is required to read/write Access Consent resources.

**Usages:**

* Examples for this Profile: [Consent/1](Consent-1.md)
* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-access-consent.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-access-consent.csv), [Excel](StructureDefinition-ehealth-access-consent.xlsx), [Schematron](StructureDefinition-ehealth-access-consent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-access-consent",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-access-consent",
  "version" : "10.0.0",
  "name" : "ehealth-access-consent",
  "status" : "active",
  "date" : "2026-08-06T13:29:38+00:00",
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
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Consent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Consent",
      "path" : "Consent"
    },
    {
      "id" : "Consent.patient",
      "path" : "Consent.patient",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
      }]
    },
    {
      "id" : "Consent.performer",
      "path" : "Consent.performer",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner"],
        "aggregation" : ["referenced"]
      }]
    },
    {
      "id" : "Consent.provision",
      "path" : "Consent.provision",
      "min" : 1
    }]
  }
}

```

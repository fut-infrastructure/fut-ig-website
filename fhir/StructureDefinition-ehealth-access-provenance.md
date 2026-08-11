# ehealth-access-provenance - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-access-provenance**

## Resource Profile: ehealth-access-provenance 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-access-provenance | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:ehealth-access-provenance |

# Introduction

Access Provenance of a resource is a record that describes the event of patient user login.

# Scope and Usage

In scope of the eHealth Infrastructure, Access Provenance resources are used for registering the event of patient login to the FUT platform. See [ehealth-access-consent](StructureDefinition-ehealth-access-consent.md) for details about "assisted login".

The following elements must be set on an Access Provenance resource for the event to be properly recorded:

* `Provenance.activity` - "user-authentication" (system "http://ehealth.sundhed.dk/cs/access-provenance-activity)
* `Provenance.target` - the patient performing login
* `Provenance.agent.who` - the patient performing login
* `Provenance.agent.who.role` - "assisted-login" or "mitid-login" (system "http://ehealth.sundhed.dk/cs/access-provenance-agent-role)

# Read/Search

Access Provenance creation is internal to the eHealth infrastructure and not exposed to clients. Creation is performed when a patient logs into the FUT platform with MitID or with assistance from a practitioner who has given an Access Consent to the patient.

**Usages:**

* Examples for this Profile: [Provenance/1](Provenance-1.md)
* CapabilityStatements using this Profile: [patient](CapabilityStatement-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-access-provenance.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-access-provenance.csv), [Excel](StructureDefinition-ehealth-access-provenance.xlsx), [Schematron](StructureDefinition-ehealth-access-provenance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-access-provenance",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-access-provenance",
  "version" : "10.0.1",
  "name" : "ehealth-access-provenance",
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
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w3c.prov",
    "uri" : "http://www.w3.org/ns/prov",
    "name" : "W3C PROV"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "fhirauditevent",
    "uri" : "http://hl7.org/fhir/auditevent",
    "name" : "FHIR AuditEvent Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Provenance",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Provenance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Provenance",
      "path" : "Provenance"
    },
    {
      "id" : "Provenance.target",
      "path" : "Provenance.target",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient"]
      }]
    },
    {
      "id" : "Provenance.activity",
      "path" : "Provenance.activity",
      "min" : 1,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://ehealth.sundhed.dk/vs/access-provenance-activity"
      }
    },
    {
      "id" : "Provenance.agent.role",
      "path" : "Provenance.agent.role",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://ehealth.sundhed.dk/vs/access-provenance-agent-role"
      }
    },
    {
      "id" : "Provenance.agent.who",
      "path" : "Provenance.agent.who",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"]
      }]
    },
    {
      "id" : "Provenance.agent.onBehalfOf",
      "path" : "Provenance.agent.onBehalfOf",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device",
        "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"]
      }]
    }]
  }
}

```

# Oxygen saturation (extra) — completed - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Oxygen saturation (extra) — completed**

## Example ServiceRequest: Oxygen saturation (extra) — completed

Profile: [ehealth-servicerequest](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-servicerequest.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-09-01 09:00:00+0000 --> 2026-01-12 12:00:00+0000](EpisodeOfCare-p04-eoc1.md)

**Sharing policy**: Sharing is allowed destination national health data

**includeAsExtra**: true

**triggerEnablementCode**: NO_TRIGGER

> **ServiceRequest status history**
* status: Completed
* period: 2025-09-01 09:05:00+0000 --> (ongoing)

**Sharing Approval Policy**: Manual

> **Reference range**
* high: 85 % (Details: UCUM code% = '%')
* type: Terapeutiske grænseværdier for RØD alarm

> **Reference range**
* low: 85.0000001 % (Details: UCUM code% = '%')
* high: 88 % (Details: UCUM code% = '%')
* type: Terapeutiske grænseværdier for GUL alarm

**instantiatesCanonical**: [Iltmætning](ActivityDefinition-ad-extra-saturation.md)

**status**: Completed

**intent**: Order

**code**: Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?

**subject**: [Thomas Bonde (official) Male, DoB: 1963-11-13 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1311633801 (use: official))](Patient-p04.md)

**occurrence**: Once



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "p04-cp1-sr-extra-saturation",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p04-eoc1"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-policies",
        "code" : "sharingAllowedDestinationNationalHealthData"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
    "valueBoolean" : true
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code",
    "valueCode" : "NO_TRIGGER"
  },
  {
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/request-status",
          "code" : "completed"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2025-09-01T09:05:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusHistory"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingApprovalPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies",
        "code" : "manual"
      }]
    }
  },
  {
    "extension" : [{
      "url" : "high",
      "valueQuantity" : {
        "value" : 85,
        "unit" : "%",
        "system" : "http://unitsofmeasure.org",
        "code" : "%"
      }
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "RAL"
        },
        {
          "system" : "urn:oid:1.2.208.176.2.1",
          "code" : "NPU03011"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  },
  {
    "extension" : [{
      "url" : "low",
      "valueQuantity" : {
        "value" : 85.0000001,
        "unit" : "%",
        "system" : "http://unitsofmeasure.org",
        "code" : "%"
      }
    },
    {
      "url" : "high",
      "valueQuantity" : {
        "value" : 88,
        "unit" : "%",
        "system" : "http://unitsofmeasure.org",
        "code" : "%"
      }
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:oid:1.2.208.184.100.1",
          "code" : "GAL"
        },
        {
          "system" : "urn:oid:1.2.208.176.2.1",
          "code" : "NPU03011"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-referenceRange"
  }],
  "instantiatesCanonical" : ["http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-saturation"],
  "status" : "completed",
  "intent" : "order",
  "code" : {
    "coding" : [{
      "system" : "urn:oid:1.2.208.176.2.1",
      "code" : "NPU03011",
      "display" : "Hb(Fe; O2-bind.; aB)—Oxygen(O2); mætn. = ?"
    }]
  },
  "subject" : {
    "reference" : "Patient/p04"
  },
  "occurrenceTiming" : {
    "repeat" : {
      "boundsPeriod" : {
        "start" : "2025-09-01T09:05:00+00:00",
        "end" : "2026-01-12T11:55:00+00:00"
      }
    }
  }
}

```

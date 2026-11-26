# Pulse 118/min (completed episode) - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pulse 118/min (completed episode)**

## Example Observation: Pulse 118/min (completed episode)

Profile: [ehealth-observation](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-observation.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-06-02 09:00:00+0000 --> 2025-10-13 12:00:00+0000](EpisodeOfCare-p01-eoc1.md)

> **Resolved timing**
* serviceRequestVersionId: 1
* type: Extra

**identifier**: [eHealthIdentifier](http://ehealth.sundhed.dk/fhir/11.0.5/NamingSystem-ehealth-identifier.html)/${SUBMISSION_UUID}

**basedOn**: [ServiceRequest Hjerte—Systole; frekv. = ? × 1/min](ServiceRequest-p01-cp1-sr-extra-pulse.md)

**status**: Final

**code**: Hjerte—Systole; frekv. = ? × 1/min

**subject**: [Sonja Knudsen (official) Female, DoB: 1975-08-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0508754760 (use: official))](Patient-p01.md)

**effective**: 2025-08-20 10:00:00+0000

**performer**: [Sonja Knudsen (official) Female, DoB: 1975-08-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0508754760 (use: official))](Patient-p01.md)

**value**: 118 1/min (Details: UCUM code1/min = '1/min')

> **referenceRange****high**: 50 1/min (Details: UCUM code1/min = '1/min')**type**: Terapeutiske grænseværdier for RØD alarm

> **referenceRange****low**: 50.0000001 1/min (Details: UCUM code1/min = '1/min')**high**: 60 1/min (Details: UCUM code1/min = '1/min')**type**: Terapeutiske grænseværdier for GUL alarm

> **referenceRange****low**: 110 1/min (Details: UCUM code1/min = '1/min')**high**: 129.9999999 1/min (Details: UCUM code1/min = '1/min')**type**: Terapeutiske grænseværdier for GUL alarm

> **referenceRange****low**: 130 1/min (Details: UCUM code1/min = '1/min')**type**: Terapeutiske grænseværdier for RØD alarm



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "p01-cp1-pulse",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-observation"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p01-eoc1"
    }
  },
  {
    "extension" : [{
      "url" : "serviceRequestVersionId",
      "valueId" : "1"
    },
    {
      "url" : "type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/resolved-timing-type",
          "code" : "Extra"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-resolved-timing"
  }],
  "identifier" : [{
    "system" : "http://ehealth.sundhed.dk/id/ehealth-identifier",
    "value" : "${SUBMISSION_UUID}"
  }],
  "basedOn" : [{
    "reference" : "ServiceRequest/p01-cp1-sr-extra-pulse"
  }],
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "urn:oid:1.2.208.176.2.1",
      "code" : "NPU21692",
      "display" : "Hjerte—Systole; frekv. = ? × 1/min"
    }]
  },
  "subject" : {
    "reference" : "Patient/p01"
  },
  "effectiveDateTime" : "2025-08-20T10:00:00+00:00",
  "performer" : [{
    "reference" : "Patient/p01"
  }],
  "valueQuantity" : {
    "value" : 118,
    "unit" : "1/min",
    "system" : "http://unitsofmeasure.org",
    "code" : "1/min"
  },
  "referenceRange" : [{
    "high" : {
      "value" : 50,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "RAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU21692"
      }]
    }
  },
  {
    "low" : {
      "value" : 50.0000001,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "high" : {
      "value" : 60,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "GAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU21692"
      }]
    }
  },
  {
    "low" : {
      "value" : 110,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "high" : {
      "value" : 129.9999999,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "GAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU21692"
      }]
    }
  },
  {
    "low" : {
      "value" : 130,
      "unit" : "1/min",
      "system" : "http://unitsofmeasure.org",
      "code" : "1/min"
    },
    "type" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "RAL"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.1",
        "code" : "NPU21692"
      }]
    }
  }]
}

```
